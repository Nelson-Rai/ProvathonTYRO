{{-- Header --}}
<div class="flex items-center justify-between border-b-2 border-gray-400 h-20 w-full bg-white py-6 px-4">
    <h2 class="text-2xl font-semibold ">Homework</h2>
    <div class="flex items-center h-14 border-2 border-black rounded-full overflow-hidden p-2">
        <span><i class="las la-search la-2x"></i></span>
        <input class="h-12 border-none" type="text" placeholder="Search Homework">
    </div>
    <div class="flex items-center">
        <img class="h-12 w-12 border-gray-200 rounded-full" src="{{ asset('img/user.jpg') }}" alt="">
        <div class="container mx-4 text-center">
            <a href="{{ route('profile.index') }}"><h2 class="text-lg font-mono font-semibold">{{ Auth::user()->name }}</h2></a>            @if (Auth::user()->hasRole('Admin'))
                <p class="text-sm font-mono">Admin</p>
            @elseif (Auth::user()->hasRole('Teacher'))
                <p class="text-sm font-mono">Teacher</p>
            @elseif (Auth::user()->hasRole('Student')) 
               <p class="text-sm font-mono">Student</p>
            @endif
        </div>
    </div>
</div>