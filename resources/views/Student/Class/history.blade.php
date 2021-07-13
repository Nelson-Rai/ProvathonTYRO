@extends('Layout.app')

@section('header')
    @include('Include.class')
@endsection

@section('content')
<div class="flex justify-end">
    @foreach ($grades as $grade)
    <h2 class="mr-4 mt-4 bg-gray-700 rounded-full py-2 px-4 text-lg text-white font-mono font-semibold ">{{ $grade->class_Name }}</h2>
    @endforeach
</div>
<div class="flex mt-3 p-3 ">
    <h2></h2>
    <table class="table-auto w-full">
        <thead class="text-xl font-semibold border-b-2 border-gray-500">
            <tr>
                <td>Day</td>
                <td>Time</td>
                <td>Class</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>7:30 AM - 8:15 PM</td>
                <td>Microprocessor</td>
                <td>BSc. CSIT</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection