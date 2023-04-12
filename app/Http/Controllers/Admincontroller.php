<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use App\Models\Admin;
use App\Models\dashboards;
use App\Models\subjects;
use App\Models\payments;
use Stripe\Charge;
use Stripe\Api\Api;
use SnoozeNotifiable;
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
   
    public function rough()
    {
   
        return view('user.rough');
    }//End method
    public function coursedashboard()
    {
   
        return view('admin.course_content');
    }//End method

    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
        }
  
        return view('welcome');

    }
    
 
    public function manageEvent(Request $request)
    {
 
        switch ($request->type) {
            case 'add':
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
    
                return response()->json($event);
                break;
    
            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
    
                return response()->json($event);
                break;
    
            case 'delete':
                $event = Event::find($request->id)->delete();
    
                return response()->json($event);
                break;
                
            default:
                
                break;
        }
    }


    public function index_2(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
             $data->notifyAt(new BirthdayNotification, Event::parse($data->end));
        
             // Schedule for a week from now
             $data->notifyAt(new NextWeekNotification, Event::now()->addDays(7));
             
             // Schedule for new years eve
             $data->notifyAt(new NewYearNotification, Event::parse('last day of this year'));
        }
  
        return view('welcome');
    }

    public function status(Request $request)
    {
        try{
            dashboards::insert([
                'status'=>$request->status,
                'motivation'=>$request->motivation

            ]);
            return response()->json(['success'=>true,'msg'=>"Course added successfully"]);
        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getmessage()]);
        }
      
    }//End method
    public function statusall()
    {
        $status = dashboards::all();
        return view('dashboard',compact('status'));

    }//End method coursenroll

    public function paymentcom(Request $request)
    {
        try{
            $priceway= $request->priceway;
            $prices = null; 
            if(isset($request->itk)){
                $prices=json_encode(['TK'=>$request->itk]);
            }
            payments::insert([
                'name'=>$request->name,
                'subject'=>$request->subject,
                'priceway'=>$request->priceway,
                'prices'=>$prices,
            ]);
            
            return response()->json(['success'=>true,'msg'=>"Course added successfully"]);
        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getmessage()]);
        }

    }//End method
    public function adminpayment()
    {
        $payments = payments::all();
        return view('admin.payment',compact('payments'));

    }//End method coursenroll
}
