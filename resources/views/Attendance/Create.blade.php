@extends('Layout.app')

@section('header')
    @include('Include.attendance')
@endsection

@section('content')
<div class="flex items-center mt-4 space-x-3">

    <div class="m-2 w-full">
        <form action="{{ route('attendance.store') }}">
                  
            <!-- Students Table -->

            <div class="flex  bg-blue-200 p-4  rounded-lg mt-6">
                <table class="table w-full text-justify">
                    <thead class="border-b-2 border-gray-300 border-b-2 border-blue-400">
                        <tr>
                            <th>SN</th>
                            <th>Name of Students</th>
                            <th>Status</th>
                            <th>Present Ratio</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student->student_name }}</td>
                                <td><input type="checkbox"> Present
                                    <input class="ml-2" type="checkbox"> Late
                                    <input class="ml-2" type="checkbox"> Absent
                                    <input class="ml-2" type="checkbox"> Leave
                                </td>
                                <td>30/30</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="mt-4">
                <a href="attendance2.html">
                    <button class="bg-indigo-600 p-2 rounded-full text-sm text-indigo-100 font-bold">Submit</button>
                </a>
            </div>
        </form>
    </div>

</div>
@endsection