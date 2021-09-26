@extends('Layout.app')

@section('content')
    <div class="text-center mt-20">
        <h2 class="text-5xl font-semibold">My Profile</h2>
    </div>
    <div class="flex justify-center mt-10">
        
        <form method="POST" action="{{ route("profile.store") }}">
            @csrf
            <div class="justify-center">
                Name: <input type="text" name="student_name" class="block shadow-3xl p-2 w-80 mt-3 mb-2" value="{{ Auth::user()->name }}">
                School Name: <input type="text" name="school_name" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Your School Name">
                Class: <input type="text" name="class_name" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Class Name">
                Address: <input type="text" name="address" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Your Address">
                Phone: <input type="text" name="phone" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Your Phone Number">
               
                @if ($errors->any()) 
                <div>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 list-none">{{ $error }}</li>
                    @endforeach
                </div>
            @endif
            </div>
            <button type="submit" class="text-sm text-blue-100 font-semibold bg-blue-500 rounded-full mt-3 px-4 py-2">Submit</button>
        </form>

    </div>

@endsection