<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Admincontroller extends Controller
{
    
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }//End Method
    
    public function Profile()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('admin.profile',compact('admindata'));
    }//End method

    public function Settings()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('admin.settings',compact('admindata'));
    }//End method
}
