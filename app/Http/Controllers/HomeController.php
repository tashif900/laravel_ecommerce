<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(auth()->user()){
            if( (strpos($request->route()->uri, 'login') !== false) || (strpos($request->route()->uri, 'register') !== false) ){
                return redirect('/home');
            }
            return view('home');
        }
        return view('layouts.main');
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            $success['user'] = $user;
            return response()->json($success, 200)->header('Authorization', $success['token']);; 
        } 
        else{ 
            return response()->json(['error'=>'Invalid Email Or Password']); 
        } 
    }
}
