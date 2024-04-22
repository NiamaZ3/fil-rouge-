<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
        public function pageregister(){
            return view('user.register');
        }

        public function pagelogin(){
            return view('user.login');
        }

        public function register(Request $request){
           
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:user,email',
            'ville'=> 'required',
            'tele' => 'required|min:10',
            'password' =>'required|min:6',
        ]);
            $utilisateur= new User;
            $utilisateur->name = $request->name;
            $utilisateur->email = $request->email;
            $utilisateur->ville= $request->ville;
            $utilisateur->tele = $request->tele;
            $utilisateur->password = Hash::make($request->password);
            $utilisateur->role_id = 2;
            $utilisateur->save();
            return redirect ('/pagelogin');
            
        }

        public function login(Request $request){
            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];
     
            if (Auth::attempt($credetials)) {
                if(Auth::user()->role_id == 1 ){
                // dd("dkhal");
                    return redirect('/pageproduit')->with('success', 'Login Success');
                }
               else 
               {
                // dd("la");
                return redirect('/showindex')->with('success', 'Login Success');
               }
                
            }
    //   return back()->with('error', 'Error Email or Password');
        }
   }


   
