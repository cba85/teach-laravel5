<?php

namespace Learn\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index()
    {
        /*
        Mail::send('emails.welcome', [], function ($m) {
            $m->to('clement.barbaza@gmail.com', 'Clément')
            ->subject('Learn test');
        });
        */
        $email = "clement.barbaza@gmail.com";
        $name = "Clément";
        Mail::send('emails.welcome', ['name' => $name], function ($m) {
            $m->to('clement.barbaza@gmail.com', 'Clément')
            ->subject('Learn test');
        });
    }
}
