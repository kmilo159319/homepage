<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AppController extends Controller
{


    public function show($id)
    {
       return view('frontend.myarea');
    }


    public function update(User $user, Request $input)
    {

                $input->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required',

                ]);

                    $user->update([
                        'password' => Hash::make($input->password),
                    ]+$input->all());

                return redirect()->route('user.edit', $user);

    }



    public function edit(User $user)
    {

        return view('frontend.edit_profile',compact('user'));
    }


}
