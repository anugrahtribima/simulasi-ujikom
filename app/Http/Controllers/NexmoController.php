<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NexmoController extends Controller
{
    public function index()
    {
        return view('nexmo');
    }

    public function store(Request $request)
    {
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to' => '6281284802395',
            'from' => 'Nugi2x',
            'text' => 'au',
        ]);

        return back();
    }
}
