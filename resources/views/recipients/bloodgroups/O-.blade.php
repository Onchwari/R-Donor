@extends('layouts.donorlayout')
<html>
    
<body>

@section('content')

<div>
    <div class="bg-red-800 h-screen -mt-10 px-10 pt-32 pb-18 text-center leading-8 absolute">
        <h3 class="font-serif font-semibold -mt-10 text-xl">MENU<h3><br>
            <ul class="py-2">
            <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('recipients') }}">ALL RECIPIENTS</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('A+') }}">A+ GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('A-') }}">A- GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('B+') }}">B+ GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('B-') }}">B- GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('AB+') }}">AB+ GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('AB-') }}">AB- GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('O+') }}">O+ GROUP</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('O-') }}">O- GROUP</a></li>
            </ul>
    </div>
    <div>
        <h1 class="text-center ml-48 text-3xl font-semibold text-red-700 mt-6">RECIPIENTS</h1>
        <div class="grid grid-cols-4 gap-0 gap-y-5 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12 ml-36 font-semibold ">
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p>Betty Yuda<br>Blood Group:A+</p>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600">Send Request</button>
</div>
</div>
    </div>
</div>
<br><br>
@endsection

</body>
</html>