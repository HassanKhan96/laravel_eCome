<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req){        
        $user = User::where('email',$req->email)->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return 'username or password mismatch.';
        }
        else {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function register(Request $req){
        $user = new User([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password)
        ]);
        $user->save();
        $req->session()->put('user',$user);
        return redirect('/');
    }
}
