<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function dashboard()
    {
        return view('/dashboard');
    }

    public function menubar()
    {
        return view('/layout/main');
    }
    

    public function login()
    {
        return view('/login');
    }

    public function postlogin(Request $request)
    {
    $request->validate([
        'email' => 'required',
        'password' => 'required'            
    ]);
    
    if (Auth::attempt($request->only('email', 'password')))
        {   
        return redirect('/dashboard')->with('status', 'SUKSES BOSS');
        }
    else
        {
        return redirect('/login')->with('error', 'Email or Password is Wrong !!!'); 
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('status', 'You Have Been Logout !!!');
    }

    public function registration()
    {
        return view('registration');
    }

    public function postregistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'        
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => 'user',
            'password' => bcrypt($request->password),
            'remember_token' => str::random(60),

        ]);
        return redirect('/login')->with('status', 'Registration Success !!!');
    }


    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
