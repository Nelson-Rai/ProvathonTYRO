<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\student;
use App\Models\teacher;



class DashboardController extends Controller
{
    public function index(){

        $students = student::all();
        $teachers = teacher::all();

        if(Auth::user()->hasRole('Admin')){
            return view('Admin.Dashboard');
        }
        elseif(Auth::user()->hasRole('Teacher')){
            return view('Teacher.dashboard', compact('students'));
        }
        elseif(Auth::user()->hasRole('Student')){
            return view('Student.dashboard', compact('teachers'));
        }
        // return view('Student.dashboard');
    }

}