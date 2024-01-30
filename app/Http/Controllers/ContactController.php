<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ReCaptcha\ReCaptcha;

class ContactController
{
    public function index()
    {
        return view('layouts.contact');
    }

    public function send(Request $request)
    {

        $recaptcha = new ReCaptcha('6Ldd6OQnAAAAAH4xXBUoz67AgT6WxpnXysoSeNGY');
        $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$response->isSuccess()) {
            return redirect()->back()->with('fail', 'reCAPTCHA verificatie mislukt. Probeer het opnieuw.');
        }

        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'onderwerp' => ['required', 'max:64'],
            'bericht' => ['required', 'max:512'],
        ]);

        $verzender = $attributes['email'];
        $onderwerp = $attributes['onderwerp'];
        $bericht = $attributes['bericht'];

        $sendMail = Mail::to(config('mail.from.address'))->send(new ContactMail($verzender, $onderwerp, $bericht));
        isset($sendMail) ? session()->flash('pass', 'Uw bericht is goed toegekomen bij ons')
            : session()->flash('fail', 'Er is iets misgegaan, probeer opnieuw');

        return redirect('/contact');

    }

}
