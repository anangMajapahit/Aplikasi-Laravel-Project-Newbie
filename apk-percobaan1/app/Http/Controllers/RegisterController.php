<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validdatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validdatedData['password'] = bcrypt($validdatedData['password']);
        $validdatedData['password'] = Hash::make($validdatedData['password']);

        User::create($validdatedData);
        
        $request->session()->flash('Success','Registration successfull! Please Login');

        return redirect('/login');
    }

}
