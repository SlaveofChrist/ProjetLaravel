<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
   
   public function create()
   {
       return view('user.create') ;
   }
   
    public function store()
   {

    $name = request('name');
    $prenom = request('prenom');
    $libelle = request('libelle');
    $email =  request('email');
    $sexe = request('sexe') ;

    $random = str_shuffle('abcdefghijklmnopqrstABCDEFGHIJKL234567890!%^&!$%') ;
    $pass_inter = substr($random,0,10) ;
        
    if($libelle = 'Medecin')
        {
            $password = 'med'.$pass_inter;
        }
    elseif($libelle = 'Infirmier')
        {
        $password = 'inf'.$pass_inter;
        }

        $user = new User() ;
        $user->name = $name ;
        $user->prenom = $prenom;
        $user->libelle= $libelle;
        $user ->password = $password;
        $user->email=$email ;
        $user->sexe = $sexe ;

        $user->save();


Mail::to($email)->send(new UserMail($user));
        return back() ;
    }

}
