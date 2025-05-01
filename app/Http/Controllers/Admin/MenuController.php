<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Resort;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $resorts = Resort::all();
        return view('admin.menus.create', compact('resorts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'resort_id' => 'required|exists:resorts,id',
            'name' => 'required',
            'description' => 'required',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,gif'
        ]);

        $data = $request->only(['resort_id', 'name', 'description']);

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('menus', 'public');
        }

        Menu::create($data);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function show(Menu $menu)
    {
        return view('admin.menus.show', compact('menu'));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $resorts = Resort::all();
        return view('admin.menus.edit', compact('menu', 'resorts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'resort_id' => 'required|exists:resorts,id',
            'name' => 'required',
            'description' => 'required',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,gif'
        ]);

        $menu = Menu::findOrFail($id);
        $data = $request->only(['resort_id', 'name', 'description']);

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('menus', 'public');
        }

        $menu->update($data);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
