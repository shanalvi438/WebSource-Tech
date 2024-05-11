<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\admin;

class AdminController extends Controller
{
    public function store(Request $request)
    {
//      dd($request);
        $admin = new admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->subject = $request->subject;
        $admin->massage = $request->massage;
        $admin->save();
        // echo "<pre>";
        //     print_r($admin);
        //     die;
            return redirect()->route('web.contact')->with('success','Your message send successfully');

    }
}
