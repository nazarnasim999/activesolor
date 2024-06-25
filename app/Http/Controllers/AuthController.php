<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Basicinfo;
use App\Models\Dealtype;
use App\Models\Historicinformation;
use App\Models\Monthlypayment;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }


    public function signup(Request $request)
    {

        // dd($request->input('age'));

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',



        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),

            'password' => bcrypt($request->input('password')),
        ]);


        $user->save();


       return view('auth.login');
    }




    public function login(Request $request){



        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            // $user = Auth::user();

            // $data = User::with('alarm', 'survey')->where('id', $user->id)->first();


            return view('welcome');

            // return response()->json(['message' => 'successful' , 'data' => $data]);
        }
        else{

            return back()->with('error', 'Invalid login credentials');
        }

    }



    public function store(Request $request){





       $basic = new Basicinfo;

       $basic->fill($request->all());
       $basic->user_id = auth()->user()->id;







       $deal = new Dealtype;
       $deal->fill($request->all());
       $deal->user_id = auth()->user()->id;




       $history = new Historicinformation;
       $history->fill($request->all());
       $history->user_id = auth()->user()->id;

       $month = new Monthlypayment;
       $month->fill($request->all());
       $month->user_id = auth()->user()->id;


       $month->save();
       $basic->save();
       $deal->save();
       $history->save();


       return view('presentation' ,['basic' => $basic, 'deal' => $deal, 'history' => $history , 'month' => $month]);












    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function presentation(){

    }
}
