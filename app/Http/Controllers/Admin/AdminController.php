<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{


    public function showLogin()
    {
//        dd(app()->getLocale());
//        dd(session('lang'));
        return view('admin.login');
    }

//    public function test($lang)
//    {
//        dd($lang);
//        return view('admin.login');
//    }


    public function doLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);


//        dd($request);
        $data = $request->only('email', 'password');
        if (auth()->guard('admin')->attempt($data)) {
            // Authentication passed...
            return redirect()->route('admin.home');

        }

        return redirect()->back();


    }


    public function showRegister()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {

        $this->dataValidated($request);

        $admin = new Admin();
        $admin->name        = $request->name;
        $admin->email       = $request->email;
        $admin->password    = bcrypt($request->password);
        $admin->save();

        auth()->guard('admin')->login($admin);
        return redirect()->route('admin.home');

    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/register');
    }


    public function dataValidated(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|confirmed|min:6',
        ]);
    }

}
