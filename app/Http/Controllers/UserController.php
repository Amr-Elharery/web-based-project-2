<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'full_name'        => 'required|string|max:255',
        'user_name'        => 'required|string|max:255|unique:users,user_name',
        'email'            => 'required|email|unique:users,email',
        'password'         => 'required|string|min:6',
        'phone'            => 'required|string|max:11',
        'whatsapp_number'  => 'required|string|max:11',
        'address'          => 'required|string|max:500',
        'user_image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    $imagePath = $request->file('user_image')->store('user_images', 'public');

    student::create([
        'full_name'        => $request->full_name,
        'user_name'        => $request->user_name,
        'email'            => $request->email,
        'password'         => bcrypt($request->password),
        'phone'            => $request->phone,
        'whatsapp_number'  => $request->whatsapp_number,
        'address'          => $request->address,
        'user_image'       => $imagePath,
    ]);

    return redirect()->route('users.create')->with('success', 'User created successfully!');
}
}

