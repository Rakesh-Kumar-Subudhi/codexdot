<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view("backend.index");
    }
    public function login()
    {
        return view('backend.admin_login');
    }
    public function register()
    {
        return view('backend.admin_register');
    }
    public function login_post(Request $request){
        $request->validate(['email' => 'required', 'password' => 'required']);
        $zanex = User::where('email', '=', $request->email)->first();

        if ($zanex) {
            if (Hash::check($request->password, $zanex->password)) {


                return redirect('/dashboard');

            } else {

                return redirect('/login')->with('error', 'Wrong Email id and Password!!');
            }
        } else {
            // dd($zanex);


            return redirect('/login')->with('error', 'Wrong Email id and Password!!');

        }

    }
}
