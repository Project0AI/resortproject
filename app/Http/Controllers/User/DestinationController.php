<?php

namespace App\Http\Controllers\User;

use App\Models\Destination;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::withCount('resorts')->get();
        return view('user.destinations.index', compact('destinations'));
    }
}
