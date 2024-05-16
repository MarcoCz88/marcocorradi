<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
   public function sendEmail(Request $request)
   {
       $messageContent = [
        'name'=> $request->input('name'),
        'email'=> $request->input('email'),
        'message'=> $request->input('message'),
       ];

       Mail::to('example@mailtrap.io')->send(new ContactMessage($messageContent));
       return redirect()->back()->with('message','Il messaggio è stato inviato correttamente, ti risponderò il prima possibile!');
   }
}
