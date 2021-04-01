<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function stopLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if($request->email == 'admin@gmail.com'){
                return redirect(route('category.index'));
            }else{
                return "Bạn không có quyền truy cập!!";
            }
        }
        return view('auth.login', [
            'email' => $request->email,
            'msg' => "Tài khoảng hoặc mật khẩu không đúng"
        ]);
    }
}
