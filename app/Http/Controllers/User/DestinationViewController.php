<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Resort;

class DestinationViewController extends Controller
{
    public function index()
    {
        $destinations = Destination::withCount('resorts')->get();
        return view('user.destinations.index', compact('destinations'));
    }

    public function resorts($id)
{
    $destination = Destination::with('resorts')->findOrFail($id);
    return view('user.resorts', compact('destination'));
}

    
}
