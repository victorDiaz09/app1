<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);

        
        Mail::to('ad01135826@uls.edu.sv')->queue(new MessageReceived($message));

        return back()->with('status', 'Recibimos tu mensaje, te respondermos en 24hrs.');
        
    }
}
