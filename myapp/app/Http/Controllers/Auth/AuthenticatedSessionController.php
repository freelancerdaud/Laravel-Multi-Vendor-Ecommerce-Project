<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $authUserRole = Auth::user()->role;

        if($authUserRole == 0){
            return redirect()->intended(route('admin', absolute: false));
        }elseif($authUserRole == 1){
            return redirect()->intended(route('vendor', absolute: false));
        } else{

            return redirect()->intended(route('dashboard', absolute: false));
        }

    }
   
}