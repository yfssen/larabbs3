<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function show(User $user)
    {
//        dd(compact('user'));
        return view('users.show',compact('user'));
    }
}
