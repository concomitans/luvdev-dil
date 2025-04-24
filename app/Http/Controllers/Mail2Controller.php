<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class Mail2Controller extends Controller
{

    public function mail(Request $request)
    {
        $mesaj = $request->all();
        Mail::queue('emails.email2', compact('mesaj'), function ($message) use($mesaj){
            $message->from('theoldcedric@gmail.com','Luvian Machinery Mail');
            $message->to('info@luvianmachinery.com','Luvian Machinery Mail')->subject('İletişim');
        });
        return Redirect::back()->with(array('mesaj'=>'true','title'=>'Başarılı','text'=>'Mesajınız gönderildi.','type'=>'success'));
    }
}
