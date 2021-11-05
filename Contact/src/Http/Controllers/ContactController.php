<?php

namespace Contact\Form\Http\Controllers;

use App\Http\Controllers\Controller;
use Contact\Form\Email\ContactMail;
use Contact\Form\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function viewContact()
    {
        return view("contact::contact");
    }

    public function send(Request $request)
    {
       $data = $request->validate([
          "name"=> "required",
          "email" => "required",
          "message" => "required"
       ]);

       Contact::create($data);

       Mail::to("mamadch@gmail.com")->send(new ContactMail());

       return back();

    }
}
