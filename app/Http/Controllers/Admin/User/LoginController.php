<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index()
    {
       return view('admin.users.login',[
          'title'=>'Đăng Nhập Hệ Thống',
       ]);

    }




    public function store(Request $request)
    {


        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if (Auth::attempt(['email'=>$request->input('email'),
            'password'=>$request->input('password')
        ], $request->input('remember'))){
            return redirect()->route('admin');
        }
        Session::flash('error','Email và password không chính xác');
        return redirect()->back();
    }






}
