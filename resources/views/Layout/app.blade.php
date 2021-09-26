<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedagogy Tuition</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body class="bg-gray-200">
    <div class="flex w-full h-full ">
            {{-- Sidebar --}}
            <div class="flex flex-col flex-initial justify-center bg-blue-800 h-full px-3 ">
                
                {{-- Brand --}}
                <div class="flex items-center p-3">
                    <img class="w-14 h-14 border-2 border-blue-200 rounded-full"
                    src="{{ asset('img/logo.png') }}" alt="logo">
                    <h2 class="ml-4 w-1/2 text-lg text-white font-serif">Pedagogy Tuition</h2>
                </div>

                {{-- Sidebar Navigation --}}
                <div class=" mt-1 flex flex-col p-2 text-blue-100 text-lg"> 
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('dashboard') }}"><i class="las la-tachometer-alt la-2x"></i><span class=" ml-3">Dashboard</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="#"><i class="las la-sms la-2x"></i><span class=" ml-3">Chats</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('homework.index') }}"><i class="las la-book-open la-2x"></i><span class=" ml-3">Homework</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('test.index') }}"><i class="las la-book-reader la-2x"></i><span class=" ml-3">Test</span></a>
                    
                    @if (Auth::user()->hasRole('Teacher'))
                        <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('attendance.index') }}"><i class="las la-address-book la-2x"></i><span class=" ml-3">Attendance</span></a>    
                    @endif
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('routine.index') }}"><i class="las la-calendar-alt la-2x"></i><span class=" ml-3">Routine</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('askme.index') }}"><i class="las la-question la-2x"></i><span class=" ml-3">Ask Me</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('assignment.index') }}"><i class="las la-book la-2x"></i><span class=" ml-3">Assignment</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('class.index') }}"><i class="las la-inbox la-2x"></i></i><span class=" ml-3">Class</span></a>
                    
                    @if (Auth::user()->hasRole('Teacher'))
                        <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('student.index') }}"><i class="las la-users la-2x"></i><span class=" ml-3">Students</span></a>
                    @elseif(Auth::user()->hasRole('Student'))
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="#"><i class="las la-chalkboard-teacher la-2x"></i><span class=" ml-3">Teachers</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="#"><i class="las la-users la-2x"></i><span class=" ml-3">Friends</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="#"><i class="las la-credit-card la-2x"></i><span class=" ml-3">Payments</span></a>                    @endif

                    
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="#"><i class="las la-cog la-2x"></i><span class=" ml-3">Settings</span></a>
                    <form method="POST" action="http://127.0.0.1:8000/logout">
                        @csrf
                        <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
            this.closest('form').submit();"><i class="las la-sign-out-alt la-2x"></i><span class=" ml-3">Log Out</span></a>
                    </form>
                    
                </div>
            </div>
            {{-- End Sidebar --}}

            <div class="flex flex-col w-full">
                @yield('header')

            {{-- Main Content --}}
                <div class="p-2">
                    @yield('content')
                </div>
            </div>
    </div>
</body>
</html>