<?php

namespace App\Http\Controllers;

use App\Models\Merek;

class MerkController extends Controller
{
    public function merek()
    {
        $mereks = Merek::all();
        return view('mereks/index', compact('mereks'));
    }

    public function show($id)
    {
        $mereks = Merek::findOrFail($id);
        return view('mereks/show', compact('mereks'));
    }

}
