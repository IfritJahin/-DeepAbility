<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class DemoController extends Controller
{
    
    public function explore(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function AdminProfile()
    {
        
        
        $admindata = Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.admin_profile',compact('admindata'));
    }//End method
}
