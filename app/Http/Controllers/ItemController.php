<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Validator;
use Auth;


class ItemController extends Controller
{
    function register(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:items',
            'password' => 'required|min:5|max:12'
        ]);
       $item = new Item;
       $item->fullname = $request->fullname;
       $item->email = $request->email;
       $item->password = $request->password;
       $item->save();

        $request->session()->put('success', 'Registered Successfully!');
       return redirect('/login');
    }

    function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = Item::where('email', '=', $request->email)->first();
        if ($user) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
        else {
            return back()->with('fail', 'This email is not registered');
        }
    }
    function dashboard(){
        return "Welcome to dashboard";
    }
}

