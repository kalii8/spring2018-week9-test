<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    //
    public function store(Request $request, $hero)
    {
        $emergency = new \App\Emergency();
        $emergency->fill([
            'subject' => $request->input('subject'),
            'description' => $request->input('description')
        ]);

        $emergency->save();

        return redirect()->action('HeroController@show', $hero);

    }
}
