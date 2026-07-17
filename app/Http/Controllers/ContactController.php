<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
 use App\Mail\CustomerReplyMail;
class ContactController extends Controller
{
   

public function send(Request $request)
{
    $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'project' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

    $data = $request->only('name', 'email', 'phone', 'project','subject','message');

    // Send to Admin
    Mail::to('adithya.hazel@gmail.com')->send(new ContactMail($data));

    // Send confirmation to Customer
    Mail::to($data['email'])->send(new CustomerReplyMail($data));

    return back()->with('success', 'Message sent successfully! We have emailed you confirmation.');
}

}
