@extends('Layout.app')

@section('header')
    @include('Include.students')
@endsection

@section('content')
<div class="flex flex-col mt-3">
        <div class="flex space-x-4 w-full">
            <div >
                
                    <select class="flex-1 w-96 bg-white" name="" id="">
                        <option value="">Select Class</option>
                        @foreach ($grades as $grade)
                            <option value="">{{ $grade->class_Name }}</option>
                        @endforeach
                    </select>
                
            </div>
            <div >
                <select class="flex-1 w-96 bg-white" name="" id="">
                    <option value="">Select Subject</option>
                        @foreach ($grades as $grade)
                            <option value="">{{ $grade->subject }}</option>
                        @endforeach
                    
                </select>
            </div>
        </div>
        <div class="flex  bg-blue-200 p-4  rounded-lg mt-6">
            <table class="table w-full text-justify">

                    <thead class="border-b-2 border-gray-300 border-b-2 border-blue-400">
                        <tr>
                            <th>SN</th>
                            <th>Name of Students</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Contact No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>           
                @foreach ($students as $student)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->phone }}</td>
                            <td><a href="{{ route('student.show',$student) }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                            <a href="{{ route('student.destroy',$student) }}"><i class="fas fa-trash-alt ml-2"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

@endsection