<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\subjects;
class DemoController extends Controller
{
    
    public function explore(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function AdminProfile(Request $request)
    {

        $id = Admin::find($request->id);
        $id->id=$request->id;
        return view('admin.profile',compact('admindata'));
    }//End method
}
