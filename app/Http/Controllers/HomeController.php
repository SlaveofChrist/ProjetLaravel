<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function index()
    {
        $user = User::all() ;
        $user2 = new User() ;
        $data = request()->validate([
            'email' =>'required',
            'password' =>'required'
        ]) ;

        foreach($user as $u)
        {
            if($u->email == $data['email'] && $u->password == $data['password'] && substr($data['password'],0,3) == 'med')
            {
                $user2 =$u;
                return view('home',compact('user2')) ;
            break; 
            }
            elseif($u->email == $data['email'] && $u->password == $data['password'] && substr($data['password'],0,3) == 'inf')
            {
                $user2=$u ;
                return view('home_inf',compact('user2')) ;
                break;
            }
            else
            return view('home_error');
        }
        
    }
}
