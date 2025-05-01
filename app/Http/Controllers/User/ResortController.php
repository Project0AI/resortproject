<?php

namespace App\Http\Controllers\User;

use App\Models\Destination;
use App\Models\Resort;
use App\Models\Menu;
use App\Http\Controllers\Controller;

class ResortController extends Controller
{
    public function showResorts($destinationId)
    {
        $destination = Destination::findOrFail($destinationId);
        $resorts = $destination->resorts;
        return view('user.resorts.index', compact('destination', 'resorts'));
    }

    public function showMenus($id)
{
    $resort = Resort::with('menus')->findOrFail($id);
    return view('user.menus', compact('resort'));
}


public function showBooking($id)
{
    $resort = Resort::findOrFail($id);
    return view('user.booking', compact('resort'));
}

}
