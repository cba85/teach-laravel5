<?php

namespace Learn\Http\Controllers;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function index()
    {
        return view('mail.index');
    }

    public function create(Request $request)
    {
        // Validation
        /*
        $this->validate($request, [
            'email' => 'required|email',
        ], [
            'required' => 'This is required',
            'email.required' => 'We need your :attribute'
        ]);
        */

        $this->validate($request, [
            'email' => 'required|email',
        ]);

        // CSRF Protection
        dd($request->email);
    }
}
