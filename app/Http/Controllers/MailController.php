<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = '190103366';
        $objDemo->receiver = '190103366';

        Mail::to("190103366@stu.sdu.edu.kz")->send(new DEmoEmail($objDemo));
    }
    //
}
