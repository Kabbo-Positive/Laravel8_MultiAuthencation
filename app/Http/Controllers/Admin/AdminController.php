<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function loginform()
    {
        return view('admin.adminlogin');
    }

    public function index()
    {
        return view('admin.dashboard.index');
    }


    public function login(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']]))
        {
            return redirect()->route('admin_dashboard')->with('error','Admin Login Successfully');
        }
        else
        {
            return back()->with('error','Invalid Email or Password');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error','Admin Logout Successfully');
    }

    public function registerform()
    {
        return view('admin.adminregister');
    }

    public function adminregister(Request $request)
    {
        //dd($request->all());
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('login_form')->with('error','Admin Register Successfully');
    }



}
