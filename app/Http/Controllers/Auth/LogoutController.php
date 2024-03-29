<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
 
        return redirect('/');
        
    }
}
