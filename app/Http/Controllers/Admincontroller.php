<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\subjects;
use App\Models\payment;
use Stripe\Charge;
use Stripe\Api\Api;
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
        return view('user.profile',compact('admindata'));
    }//End method

    public function Settings()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('user.settings',compact('admindata'));
    }//End method
    public function editProfile()
    {
        $id = Auth::user()->id;
        $editdata = User::find($id);
        return view('user.editprofile',compact('editdata'));

    }//End method
    public function storeProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username =$request->username;
        $data->email =$request->email;
        $data->contact =$request->contact;
        if($request->file('pic')){
            $file = $request->file('pic');

            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_img'),$filename);
            $date['pic']=$filename;
        }
        $data->save();
        return redirect('/profile');

    }//End method
    public function Quiz()
    {
        $id = Auth::user()->id;
        $quizdata = User::find($id);
        return view('user.quiz',compact('quizdata'));
    }//End method
    public function Course()
    {
        $id = Auth::user()->id;
        $coursedata = User::find($id);
        return view('user.course',compact('coursedata'));

    }//End method
    public function CourseContent()
    {
        $id = Auth::user()->id;
        $coursecontentdata = User::find($id);
        return view('user.course_content',compact('coursecontentdata'));

    }//End method

    public function addcourse(Request $request)
    {
        try{
            $plan= $request->plan;
            $prices = null; 
            if(isset($request->itk)){
                $prices=json_encode(['TK'=>$request->itk]);
            }
            subjects::insert([
                'subject'=>$request->subject,
                'plan'=>$plan,
                'prices'=>$prices,
                'expire'=>$request->expire,

            ]);
            return response()->json(['success'=>true,'msg'=>"Course added successfully"]);
        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getmessage()]);
        }
      
    }//End method
    public function subj()
    {
        $subjects = subjects::all();
        return view('admin.courses',compact('subjects'));

    }//End method coursenroll
    public function coursenroll()
    {
        $subjects = subjects::all();
        return view('user.courses',compact('subjects'));

    }
    public function editcourse(Request $request)
    {
        try{
            $subjects = subjects::find($request->id);
            $subjects->subjects=$request->subjects;
            $subjects->save();
            return response()->json(['success'=>true,'msg'=>"Course added successfully"]);
        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getmessage()]);
        }
      
    }//End method
    public function testdashboard()
    {
        return view('admin.quiz');

    }//End method
    public function payment()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('user.payment',compact('admindata'));
    }//End method
}
