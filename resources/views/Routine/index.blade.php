@extends('Layout.app')

@section('header')
    @include('Include.routine')
@endsection

@section('content')
<div class="flex mt-3 p-3 ">
    
    <table class="table-auto w-full">
        <thead class="text-xl font-semibold border-b-2 border-gray-500">
            <tr>
                <td>Time</td>
                <td>Subject</td>
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