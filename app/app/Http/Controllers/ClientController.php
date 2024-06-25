<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       return view('store.login');
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
       return redirect()->route('store.index')->with('log','');
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

}
