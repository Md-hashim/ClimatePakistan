<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view("authentication.login");
    }

    public function loginUser(Request $request)
    {

            $request->validate([
                "email" => "required",
                "password" => "required",
            ]);
            $credentials = $request->only("email", "password");

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                // Store user data in session
                Session::put('user', $user);
                return redirect()->route("admin_dashboard",);
            }
            Session::flash("error", "Invalid email address or password!");
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route("login");

    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route("login");
    }
}
