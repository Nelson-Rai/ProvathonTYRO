<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function teacherDashboard(){
        return view('Teacher.dashboard');
    }

    public function Dashboard(){
        return view('dashboard');
    }
}
