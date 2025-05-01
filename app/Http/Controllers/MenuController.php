<?php

namespace App\Http\Controllers;

use App\Models\Resort;

class MenuController extends Controller
{
    public function index($resortId)
    {
        $resort = Resort::findOrFail($resortId);
        return $resort->menus;
    }
    
}
