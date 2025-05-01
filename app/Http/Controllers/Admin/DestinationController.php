<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
    
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('destinations', 'public');
        }
    
        Destination::create($data);
    
        return redirect()->route('destinations.index');
    }
    


    public function edit(Destination $destination)
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $data = $request->all();
    
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('destinations', 'public');
        }
    
        $destination->update($data);
    
        return redirect()->route('destinations.index');
    }
    


    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index');
    }
    
}
