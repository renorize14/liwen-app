<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('dashboard')->with(['success'=>'You are logged in.']);
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }

    public function logIn(Request $request){

        $prof = Professional::where('rut', $request->rut)->get();


        if (password_verify($request->password, $prof[0]->password)) {
            session(['logged'  => true]);
            session(['user_id' => $prof[0]->id]);
            session(['active'  => $prof[0]->active]);
            return "success";
        }
        else{
            return "unauthorized";
        }
    }

    public function getUserData(Request $request){
        $prof = Professional::where('id', $request->id)->get();

        return json_encode($prof[0]);
    }
}
