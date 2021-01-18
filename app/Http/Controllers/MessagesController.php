<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\MessageReceived;

class MessagesController extends Controller
{
    function store(Request $request)
    {
        $message = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'content' => ['required', 'min:3']
        ]);

        Mail::to('bollatiagustin@gmail.com')->queue(new MessageReceived($message));

        return redirect()->route('home')->with('status', 'Tu consulta fue enviada. Te responderemos dentro de las 24 hs.');
    }
}
