<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmailOnSubmit(Request $request)
    {
        $sub = $request->sub;
        $name = $request->name;
//        $email = $request->email;
        $phone = $request->phone;
//        $property_type = $request->property_type;
        $mailData = [
            'url' => 'https://stepsinvestor.com/',
        ];

        $send_mail = "info@stepsinvestor.com";
        $ccEmails = ["call.center@steps.com.qa"];
        Mail::to($send_mail)->cc($ccEmails)->send(new SendMail($sub,$name,$phone));
//        $senderMessage = "thanks for your message , we will reply you in later";
//        Mail::to( $email)->send(new
//        SendMessageToEndUser($name,$senderMessage,$mailData));
        return redirect('https://www.steps.com.qa/');
    }
}
