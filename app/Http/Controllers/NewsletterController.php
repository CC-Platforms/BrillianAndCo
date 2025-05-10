<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscriberEmail = $data['email'];
        $recipient = config('mail.from.address');

        // Send email notification
        Mail::raw("A new user has subscribed to the newsletter: {$subscriberEmail}", function ($message) use ($recipient) {
            $message->to($recipient)
                    ->subject('New Newsletter Subscription');
        });

        return redirect()->route('home.index')->with('success', 'You have subscribed successfully!');
    }
}
