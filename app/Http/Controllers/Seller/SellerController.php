<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use Carbon\Carbon;

class SellerController extends Controller
{
    public function sellerloginform()
    {
        return view('seller.sellerlogin');
    }

    public function index()
    {
        return view('seller.dashboard.index');
    }


    public function sellerlogin(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if(Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']]))
        {
            return redirect()->route('seller_dashboard')->with('error','Seller Login Successfully');
        }
        else
        {
            return back()->with('error','Invalid Email or Password');
        }
    }

    public function sellerlogout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_form')->with('error','Seller Logout Successfully');
    }

    public function sellerregisterform()
    {
        return view('seller.sellerregister');
    }

    public function sellerregister(Request $request)
    {
        //dd($request->all());
        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('seller_login_form')->with('error','Seller Register Successfully');
    }


}
