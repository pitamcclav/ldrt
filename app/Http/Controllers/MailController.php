<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\sendMessage;
use App\Mail\SendMessageToEndUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public $reciever = "info@lrfdt.org";
    public $senderMessage = "Your message has been recieved, we will get back to you soon. Thank you for contacting us.";

    //
    public function mailData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        
        
        Mail::to($this->reciever)->send(new SendMail($name, $email, $phone, $message));
        Mail::to( $email)->send(new SendMessageToEndUser($name,$this->senderMessage));
        return redirect()->back()->with('message', 'Message sent successfully');    

       
    }

    public function messageData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        

        Mail::to($this->reciever)->send(new sendMessage($name, $email, $subject, $message));
        Mail::to( $email)->send(new SendMessageToEndUser($name,$this->senderMessage));
        return redirect()->back()->with('message', 'Message sent successfully');  

       
    }
    
}


