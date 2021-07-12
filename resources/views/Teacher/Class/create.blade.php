@extends('Layout.app')

@section('header')
    @include('Include.class')
@endsection

@section('content')
    <div class="text-center mt-20">
        <h2 class="text-5xl font-semibold">Create New Class</h2>
    </div>
    <div class="flex justify-center mt-10">
        
        <form method="POST" action="{{ route("class.store") }}">
            @csrf
            <div class="justify-center">
                Faculty: <input type="text" name="faculty" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Your Faculty">
                Class: <input type="text" name="class_name" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Class">
                Year: <input type="text" name="year" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Grade Year/Semester">
                Subject: <input type="text" name="subject" class="block shadow-3xl p-2 w-80 mt-3 mb-2" placeholder="Enter Your subject">
                Starting Date: <br><input type="date" name="start_from" class="form-control mt-3 mb-2">
               
                {{-- Starting Date: <input min="2000-01-01" max="2019-12-31" name="date_of_birth" id="dob" type="date" class="form-control" placeholder="Date of birth" value="{{ date('m/d/Y',strtotime($user->date_of_birth)) }}"/> --}}
            </div>
            <button type="submit" class="text-sm text-blue-100 font-semibold bg-blue-500 rounded-full mt-3 px-4 py-2">Submit</button>
        </form>

    </div>
    @if ($errors->any)
    <div>
        @foreach ($errors as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
@endsection