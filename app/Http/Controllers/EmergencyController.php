<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    //
    public function store(Request $request, $slug)
    {
        $emergency = new \App\Emergency();
        $emergency->fill([
            'subject' => $request->input('subject'),
            'description' => $request->input('description')
        ]);

        $emergency->save();
        session()->flash('success_message', 'Success!');

        return redirect()->action('HeroController@show', $slug);

        
    }
}
