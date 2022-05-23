<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Mail\EnquiryMail;
use App\Mail\EnquiryMailForAdmin;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Log;
class ContactUsController extends Controller
{
    public function index()
    {
        return view('FrontEnd.contact');
    }

    public function contact(Request $req)
    {
        
        $c=ContactUs::create([
            'name'=>$req->full_name,
            'email'=>$req->email,
            'subject'=>$req->subject,
            'mobile'=>$req->mobile,
            'message'=>$req->message,
            'status'=>1,
        ]);
        if($c)
        {
            $person=ContactUs::find($c->id);
            Mail::to($req->email)->send(new EnquiryMail($person));
            Mail::to(env('Adminmail'))->send(new EnquiryMailForAdmin($person));

            return 1;
        }
        else
        {
            return 0;
        }
    }
}
