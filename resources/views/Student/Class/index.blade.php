@extends('Layout.app')

@section('header')
    @include('Include.class')
@endsection

@section('content')
<div class="flex justify-end">
    <a href="{{ route('class.create') }}"><button class="mr-4 mt-4 bg-gray-700 rounded-full py-2 px-4 text-lg text-white font-mono font-semibold ">Create Class</button></a>
</div>
<div class="flex items-center mt-4 space-x-3">
    @foreach ($grades as $grade)
        <div class="flex items-center justify-around w-1/3 h-28 bg-indigo-600 rounded-lg ml-2 p-3">
            <div class="flex flex-col  text-white">
                <h2 class="text-4xl font-bold ">{{ $grade->class_Name }}</h2>
                <p class="text-xl ">56 Students</p>
            </div>
            <a class="bg-pink-500 rounded-lg p-2 text-white font-semibold" href="">Start Class<i class="ml-1 las la-arrow-right la-1x"></i></a>
        </div>
    @endforeach
    
</div>
@endsection