<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resort;
use App\Models\Destination;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    public function index()
    {
        $resorts = Resort::with('destination')->get();
        return view('admin.resorts.index', compact('resorts'));
    }

    public function create()
    {
        $destinations = Destination::all();
        return view('admin.resorts.create', compact('destinations'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
    
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('resorts', 'public');
        }
    
        Resort::create($data);
    
        return redirect()->route('resorts.index');
    }
    


    public function edit(Resort $resort)
    {
        $destinations = Destination::all();
        return view('admin.resorts.edit', compact('resort', 'destinations'));
    }

    public function update(Request $request, Resort $resort)
{
    $data = $request->all();

    if ($request->hasFile('picture')) {
        $data['picture'] = $request->file('picture')->store('resorts', 'public');
    }

    $resort->update($data);

    return redirect()->route('resorts.index');
}



    public function destroy(Resort $resort)
    {
        $resort->delete();
        return redirect()->route('resorts.index');
    }
}
