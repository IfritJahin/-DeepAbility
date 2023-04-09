<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Stripe\Charge;
use Stripe\Stripe;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    
//
    public function purchase(Course $course)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $token = request()->stripeToken;

        try {
            $charge = Charge::create([
                'amount' => $course->price * 100,
                'currency' => 'usd',
                'description' => $course->title,
                'source' => $token,
            ]);
            
            // Add the course to the user's purchased courses
            auth()->user()->courses()->attach($course->id);

            return redirect()->route('courses.index')->with('success', 'Purchase successful.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error', $e->getMessage()]);
        }
    }
}
