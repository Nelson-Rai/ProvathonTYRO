@extends('Layout.app')

@section('header')
    @include('Include.class')
@endsection

@section('content')
@if (Auth::user()->hasRole('Teacher','Admin'))
    <div class="flex justify-end">
        <a href="{{ route('class.create') }}"><button class="mr-4 mt-4 bg-gray-700 rounded-full py-2 px-4 text-lg text-white font-mono font-semibold ">Create Class</button></a>
    </div>
@endif
    
    <div class="mt-4 grid grid-flow-row grid-cols-3 grid-rows-3 gap-4">
        @foreach ($grades as $grade)
        <div
        class="container flex items-center justify-between rounded-lg bg-indigo-700 text-indigo-100 px-8 py-4 w-62 h-28">
        <div class="flex flex-col items-center">
            <a href="homework-page.html">
                <h2 class="font-semibold text-2xl">{{ $grade->class_Name }}</h2>
                <h3>{{ $grade->year }}</h3>
                <p>{{ $grade->subject }}</p>
            </a>
        </div>
        <div class="flex flex-col">
            @if (Auth::user()->hasRole('Admin'))
                {{-- Admin --}}
        @elseif (Auth::user()->hasRole('Teacher'))
            <a href="https://meet.google.com/mmh-hmec-tuf"><h2 class="text-sm bg-yellow-500 rounded-lg text-green-100 px-2 py-1 mt-2">Start Class</h2></a>
            <a href="{{ route('class.show', $grade) }}"><h2 class="text-sm bg-green-500 rounded-lg text-green-100 px-2 py-1 mt-2">Class History</h2></a>          
        @elseif (Auth::user()->hasRole('Student')) 
            <a href="https://meet.google.com/mmh-hmec-tuf"><h2 class="text-sm bg-yellow-500 rounded-lg text-green-100 px-2 py-1 mt-2">Join Class</h2></a>
            <a href="{{ route('class.show', $grade) }}"><h2 class="text-sm bg-green-500 rounded-lg text-green-100 px-2 py-1 mt-2">Class History</h2></a>
        @endif
            
        </div>
    </div>
    @endforeach
    
    
@endsection