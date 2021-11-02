<?php

namespace Contact\Form\Http\Controllers;

use App\Http\Controllers\Controller;
use Contact\Form\Models\Contact;
use Illuminate\Http\Request;

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

       return back();

    }
}
