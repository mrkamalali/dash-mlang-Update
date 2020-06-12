<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;


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

//        Show Error Validation Message For Failed Login
        $error = new MessageBag(['password' => __('site.wrongLogin')]);
        return redirect()->back()->withErrors($error);


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
        return redirect('admin/login');
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
