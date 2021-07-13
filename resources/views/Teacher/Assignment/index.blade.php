@extends('Layout.app')

@section('header')
    @include('Include.assignment')
@endsection

@section('content')
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
        <a href="#"><h2 class="text-sm bg-yellow-500 rounded-lg text-green-100 px-2 py-1 mt-2">New Assignment</h2></a>
        <a href="#"><h2 class="text-sm bg-green-500 rounded-lg text-green-100 px-2 py-1 mt-2">Check Assignment</h2></a>
    </div>
</div>
@endforeach
@endsection