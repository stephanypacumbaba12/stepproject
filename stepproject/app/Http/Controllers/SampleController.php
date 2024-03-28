<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function home()
    {
        if(Auth::check())
        {
            return view('home');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function contact()
    {
        if(Auth::check())
        {
            return view('contact');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function product()
    {
        if(Auth::check())
        {
            return view('product');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }


    function about()
    {
        if(Auth::check())
        {
            return view('about');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function services()
    {
        if(Auth::check())
        {
            return view('services');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }


    function faq()
    {
        if(Auth::check())
        {
            return view('faq');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }






    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('/');
    }
}