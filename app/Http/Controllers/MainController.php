<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\admin;


class MainController extends Controller
{
    //
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
    //  $this->validate($request, [
    //   'email'   => 'required|email',
    //   'password'  => 'required|alphaNum|min:5'
    //  ]);

    

    //  if(Auth::attempt($user_data))
    //  {
    //   return redirect('main/successlogin');
    //  }
    //  else
    //  {     
    //   return back()->with('error', 'Wrong Login Details');
    //  }
    $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password'),
       );
    
       $admin=admin::find($user_data["email"]);
       if(isset($admin)){

        if($admin->password==$user_data['password']){

        }
       }

     }

    function successlogin()
    {
     return view('successlogin');
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }

    
}
