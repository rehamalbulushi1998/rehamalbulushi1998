<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('dashboard', ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['max:255', 'unique:users'],
        ]);
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->user_name = $request->input('user_name');
        $user->save();
        
        return redirect()->back()->withSuccess('Profile updated successfully!');
    }
}
