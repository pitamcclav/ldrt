<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\sendMessage;
use App\Mail\SendMessageToEndUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public $reciever = "ssekitoolekopeterclaver@gmail.com";
    //
    public function mailData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        $senderMessage = "thanks for your message , we will reply you in later";
        
        
        Mail::to($this->reciever)->send(new SendMail($name, $email, $phone, $message));
        Mail::to( $email)->send(new SendMessageToEndUser($name,$senderMessage));
        return redirect()->back()->with('message', 'Message sent successfully');    

       
    }

    public function messageData(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $senderMessage = "thanks for your message , we will reply you in later";

        Mail::to($this->reciever)->send(new sendMessage($name, $email, $subject, $message));
        Mail::to( $email)->send(new SendMessageToEndUser($name,$senderMessage));
        return redirect()->back()->with('message', 'Message sent successfully');  

       
    }
    
}


