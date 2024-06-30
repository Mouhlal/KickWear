<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class ClientController extends Controller
{
   public function about(){
    return view('pages.about');
   }
   public function contact(){
    return view('pages.contact');
   }
   public function showLoginForm()
   {
       return view('auth.login');
   }

   public function showRegisterForm()
   {
       return view('auth.register');
   }

   public function login(Request $request){
    $email = $request->email;
    $password = $request->password;
    $xo = [
        'email' => $email,
        'password' => $password
    ];
    if(Auth::attempt($xo)){
       $request->session()->regenerate();
       return redirect()->route('produits.index')->with('log','');
    }else{
        return back()->withErrors([
            'email' => 'Email Or Password is incorrect !! '
        ]);
    }
   }

   public function deconnexion(Request $request){
    Session::flush();
    Auth::logout();
    return redirect()->route('/')->with('dec','Deconnexion avec succes');
   }
   public function register(Request $request){
        $field = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        $field['password'] = Hash::make($request->password);
        User::create($field);
        return redirect()->route('auth.login')->with('reg','Inscription avec succes');
   }

}
