<?php

namespace App\Http\Controllers;

use App\Mail\MailReceived;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            //Se aplican las reglas para validar en el servidor el formulario
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'content' => 'required|min:3',
        ]);
        //, ['name.required' => __('i need your name'),]);


        Mail::to('client@email.com')->queue(new MailReceived($message));


        return back()->with('status', 'Mensaje enviado');
    }
}
