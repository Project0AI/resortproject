<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    public function menus($id)
    {
        $resort = Resort::findOrFail($id);
        $menus = $resort->menus;
        return view('menus.index', compact('resort', 'menus'));
    }

    public function book($id)
    {
        $resort = Resort::findOrFail($id);
        return view('resorts.book', compact('resort'));
    }
}
//connect to mysql and CRUD 
