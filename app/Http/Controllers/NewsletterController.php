<?php

namespace Learn\Http\Controllers;

use Illuminate\Http\Request;

use Learn\Http\Requests\CreateSubscriptionFormRequest;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('newsletter.index');
    }

    public function create(CreateSubscriptionFormRequest $request)
    {
        // Form request
        /*
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        */
        dd('Works');
    }
}
