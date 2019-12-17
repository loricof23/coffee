<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Products;

class AdminController extends Controller
{
    public function dashboard(){
        return view ('admin.homeadmin');
    }

    public function front(){
        return view ('admin.insert');
    }

    public function goInsert(Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'name'=>'required',
                'price'=>'required',
                'type'=>'required',
                'file_upload'=>'required',
            ]);

            $newProducts = new Products;

            $newProducts->name = $request->name;
            $newProducts->price = $request->price;
            $newProducts->type = $request->type;
            $newProducts->image = $request->file_upload;
            $newProducts->user_id = '2';

            $newProducts->save();

            return redirect('/dashboard/insert')->with('success', 'Data inserted Successfully');
        } else {
            return redirect('/dashboard/view');
        }
    }


    public function view(){
        $products = Products ::all();

        return view ('admin.view', ['kopi' => $products]);
    }

    public function up($id){
        $products = Products::findOrFail($id);
        return view('admin.update', ['products' =>$products]);
    }

    public function goUpdate($id,Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'name'=>'required',
                'price'=>'required',
                'type'=>'required',
                'file_upload'=>'required',
            ]);

            $newProducts = Products::findOrFail($id);
            $newProducts->name = $request->name;
            $newProducts->price= $request->price;
            $newProducts->type = $request->type;
            $newProducts->image = $request->file_upload;
            $newProducts->save();
            return redirect('/dashboard/view')->with('success','Data Updated Successfully');
        }else{
            return redirect('/');
        }
    }

    public function del($id){
        $products = Products::findOrFail($id);
        $products->delete();
        // return view('admin.view');
        return redirect('/dashboard/view');
    }

    public function messages(){
        $messages = Message::all();

        return view ('admin.viewmessage', ['pesan' => $messages]);
    }
}
