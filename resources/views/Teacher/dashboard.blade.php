@extends("Layout.app")

@section('header')
    @include('Include.dashboard')
@endsection

@section('content')
    <div class="flex items-center mt-4 space-x-3">
        <div class="flex items-center justify-around w-64 h-28 bg-indigo-600 rounded-lg p-3">
            <img class=" bg-white border-2 border-blue-200 rounded-full p-2" src="https://img.icons8.com/ios/50/000000/students.png"/>
            <div class="flex flex-col  text-white">
                <h2 class="text-4xl font-bold ">53</h2>
                <p class="text-xl ">Students</p>
            </div>
        </div>
        <div class="flex items-center justify-around w-64 h-28 bg-indigo-600 rounded-lg p-3">
            <img class=" bg-white border-2 border-blue-200 rounded-full p-2" src="https://img.icons8.com/ios/50/000000/students.png"/>
            <div class="flex flex-col  text-white">
                <h2 class="text-4xl font-bold ">3</h2>
                <p class="text-xl ">Classes</p>
            </div>
        </div>
        <div class="flex items-center justify-around w-64 h-28 bg-indigo-600 rounded-lg p-3">
            <img class=" bg-white border-2 border-blue-200 rounded-full p-2" src="https://img.icons8.com/ios/50/000000/students.png"/>
            <div class="flex flex-col  text-white">
                <h2 class="text-4xl font-bold ">24</h2>
                <p class="text-xl ">Work Days</p>
            </div>
        </div>
        <div class="flex items-center justify-around w-64 h-28 bg-indigo-600 rounded-lg p-3">
            <img class=" bg-white border-2 border-blue-200 rounded-full p-2" src="https://img.icons8.com/ios/50/000000/students.png"/>
            <div class="flex flex-col  text-white">
                <h2 class="text-4xl font-bold">1</h2>
                <p class="text-xl ">Assignment</p>
            </div>
        </div>
    </div>
    <div class="flex space-x-3">
        <div class="flex flex-col  bg-white mt-3 rounded-lg  p-2 w-3/4 ">
            <div class="flex items-center justify-between border-b-2 border-gray-300 p-2">
                <h2 class="text-xl font-semibold">Recent Classes</h2>
                <a class="bg-pink-500 rounded-lg p-2 text-white font-semibold" href="">See All<i class="ml-1 las la-arrow-right la-1x"></i></a>
            </div>
            <div class="p-2">
            <table class="table-auto w-full font-semibold text-lg">
                <thead>
                    <tr>
                        <td>Class</td>
                        <td>Subject</td>
                        <td>Time</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bsc CSIT</td>
                        <td>Microprocessor</td>
                        <td>6:00 PM</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    
        <div class="flex flex-col  bg-white mt-3 rounded-lg  p-2 w-1/4 ">
            <div class="flex items-center justify-between border-b-2 border-gray-300 p-2">
                <h2 class="text-xl font-semibold">New Students</h2>
                <a class="bg-pink-500 rounded-lg p-2 text-white font-semibold" href="">See All<i class="ml-1 las la-arrow-right la-1x"></i></a>
            </div>
            <div class="p-2">
            <table class="table-auto w-full font-semibold text-lg">
                @foreach ($students as $student)
                    <tbody>
                        <tr>
                            <td>{{ $student->student_name }}</td>
                            <td><a href="#"><i class="fa fa-user"></i></a>
                            </td>
                            <td><a href="#"><i class="fa fa-comments"></i></a>
                            </td>
                            <td><a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>

@endsection