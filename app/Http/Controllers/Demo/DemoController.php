<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Index(){
        echo "Hi,THis is from control team";
        return view("About");
    }
    public function Contact(){
        echo "Hi,This contact is from control team";
        return view("Contact");
    }
}
