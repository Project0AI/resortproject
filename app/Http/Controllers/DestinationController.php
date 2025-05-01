<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

    public function resorts($id)
    {
        $destination = Destination::findOrFail($id);
        $resorts = $destination->resorts;
        return view('resorts.index', compact('destination', 'resorts'));
    }
}
