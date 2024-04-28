<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );



        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/dashboard');
    }

    public function registerUser(Request $request){
        $prof = new Professional();

        $prof->name       = $request->name;
        $prof->rut        = $request->rut;
        $prof->mail       = $request->email;
        $prof->phone      = $request->phone;
        $prof->speciality = 0;
        $prof->active     = 0;
        $prof->password   = bcrypt($request->password);
        $prof->user_type  = "user";

        if ( $prof->save() ){
            $json = [
                "id" => $prof->id,
                "active" => 0,
                "response" => "success"
            ];

            session(['logged'  => true]);
            session(['user_id' => $prof->id]);
            session(['active'  => 0]);

            return json_encode( $json );
        }
        else{
            return "error";
        }
    }
}
