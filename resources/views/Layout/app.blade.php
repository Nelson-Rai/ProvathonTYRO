<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedagogy Tuition</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body class="bg-gray-200">
    <div class="flex w-full h-full ">
            {{-- Sidebar --}}
            <div class="flex flex-col flex-initial justify-center bg-blue-800 h-full pl-3 ">
                
                {{-- Brand --}}
                <div class="flex items-center p-3">
                    <img class="w-14 h-14 border-2 border-blue-200 rounded-full"
                    src="{{ asset('img/logo.png') }}" alt="logo">
                    <h2 class="ml-4 w-1/2 text-lg text-white font-serif">Pedagogy Tuition</h2>
                </div>

                {{-- Sidebar Navigation --}}
                <div class=" mt-1 flex flex-col p-2 text-blue-100 text-lg"> 
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-tachometer-alt la-2x"></i><span class=" ml-3">Dashboard</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-sms la-2x"></i><span class=" ml-3">Chats</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-book-open la-2x"></i><span class=" ml-3">Homework</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-book-reader la-2x"></i><span class=" ml-3">Test</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-address-book la-2x"></i><span class=" ml-3">Attendance</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-calendar-alt la-2x"></i><span class=" ml-3">Routine</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-question la-2x"></i><span class=" ml-3">Ask Me</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-book la-2x"></i><span class=" ml-3">Assignment</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-inbox la-2x"></i></i><span class=" ml-3">Class</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-chalkboard-teacher la-2x"></i><span class=" ml-3">Teachers</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-users la-2x"></i><span class=" ml-3">Students</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="dashboard"><i class="las la-cog la-2x"></i><span class=" ml-3">Settings</span></a>
                    <a class="flex items-center my-1 hover:bg-blue-700 rounded-lg p-2" href="{{ route('logout') }}"><i class="las la-sign-out-alt la-2x"></i><span class=" ml-3">Log Out</span></a>
                </div>
            </div>
            {{-- End Sidebar --}}

            <div class="flex flex-col w-full">
            {{-- Header --}}
                <div class="flex items-center justify-between border-b-2 border-gray-400 h-20 w-full bg-white py-6 px-4">
                    <h2 class="text-2xl font-semibold ">Dashboard</h2>
                    <div class="flex items-center h-14 border-2 border-black rounded-full overflow-hidden p-2">
                        <span><i class="las la-search la-2x"></i></span>
                        <input class="h-12 border-none" type="text" placeholder="Search Class">
                    </div>
                    <div class="flex items-center">
                        <img class="h-12 w-12 border-gray-200 rounded-full" src="{{ asset('img/user.jpg') }}" alt="">
                        <div class="container mx-4 text-center">
                            <a href="#"><h2 class="text-lg font-mono font-semibold">{{ Auth::user()->name }}</h2></a>
                            <p class="text-sm font-mono">Teacher</p>
                        </div>
                    </div>
                </div>

            {{-- Main Content --}}
                <div class="p-2">
                    @yield('content')
                </div>
            </div>
    </div>
</body>
</html>