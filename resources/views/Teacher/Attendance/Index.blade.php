@extends('Layout.app')

@section('header')
    @include('Include.attendance')
@endsection

@section('content')
<div class="flex items-center mt-4 space-x-3">
    @foreach ($grades as $grade)
        <div class="flex items-center justify-around w-1/3 h-28 bg-indigo-600 rounded-lg ml-2 p-3">
            <div class="flex flex-col  text-white">
                <h2 class="text-4xl font-bold ">{{ $grade->class_Name }}</h2>
                <p class="text-xl ">56 Students</p>
            </div>
            <div class="flex flex-col space-y-3">
                <a class="bg-pink-500 rounded-lg p-2 text-white font-semibold" href="{{ route('teacher.attendance.create') }}">Take Attendance<i class="ml-1 las la-arrow-right la-1x"></i></a>
            <a class="bg-green-500 rounded-lg p-2 text-white font-semibold" href="{{ route('teacher.attendance.show',$attendances) }}">Show Attendance<i class="ml-1 las la-arrow-right la-1x"></i></a>
            </div>
        </div>
    @endforeach
</div>
@endsection