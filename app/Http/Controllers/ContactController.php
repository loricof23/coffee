<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function front(){
        return view('pages.contact');
    }

    public function goInsert(Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'name'=> 'required',
                'email'=> 'required',
                'message'=> 'required'
            ]);

            $newMessage = new Message;

            $newMessage->name = $request->name;
            $newMessage->email = $request->email;
            $newMessage->message = $request->message;

            $newMessage->save();

            return redirect('/contact')->with('success','data inserted Successfully');
        }else{
            return redirect('/');
        }
    }
}
