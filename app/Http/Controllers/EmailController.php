<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(){
        // veladater
        // $request->validate([
        //     'email' => 'required|email',

        // ]);


        // $data = $request->name;

        $toEmail = "workmega509@gmail.com";
        $subject = "Wellcome to Singh NursingHome";
        $message = "This is test mail";

        $request =  Mail::to($toEmail)->send(new welcomeemail($message, $subject));
        dd($request);
    }
}
