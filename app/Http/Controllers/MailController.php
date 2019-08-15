<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'string|min:3',
            'message' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('info@kupangenergi.co.id');
            $message->subject($data['subject']);
        });

        return back()->with('contact', 'Thank you for dropping us a line! Because every single comment or critics that you gave, will make us be a better company.');
    }
}
