<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {              
        return view('login');
    }

   //  public function check_login(Request $request){
   //  //  dd($request->all()); //yaha hamne dd ka use kiya hi kyki hame request se data print karna tha and code end karna tha
   // //  User::find(1)->update(['password'=>Hash::make(123456)]);
   //    if (auth()->attempt(array('email' => $request['email'], 'password' => $request['password']))) 
    
   //   if (($request['email']=='admin@gmail.com' && $request['password']=='123456'))
//         {  
//            return redirect()->route('dashboard');
//        }
//        else{
//         // echo "error','Invalid Login Credentials.";
//         // dd($request->password);
//          return redirect()->back()->with('error','Invalid Login Credentials.');  
//            }     
//     }

     
// public function gallery_panel()
// {
  
//    if(Auth::User())
//    {
//  $check=Index::all();

//  return view('dashboard',compact('check'));
//    }
//    else{
//       return redirect()->route('login');

//    }
// }

// public function log_out()
// {
//    Auth::logout();
  
//   return redirect()->route('login');
// }

public function login_submit(Request $request)
{
   if (auth()->attempt(array('email' => $request['email'], 'password' => $request['password'])))
   {
      // echo json_encode (Auth::user());
      // dd(1);
      return redirect()->route('dashboard');
  }
  else{
   // dd(2);
   // echo "error','Invalid Login Credentials.";
    return redirect()->back()->with('error','Invalid Login Credentials.');
      }
}
public function log_out()
{
   Auth::logout();
  return redirect()->route('login');
}
}
