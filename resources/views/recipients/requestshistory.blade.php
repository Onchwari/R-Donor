@extends('layouts.userlayout')
<html>
    
<body>

@section('content')

<div>
<div class="bg-red-800 h-screen -mt-10 px-10 pt-48 pb-18 text-center leading-8 absolute">
        <h3 class="font-serif font-semibold -mt-10 text-xl">MENU<h3><br>
            <ul class="py-2">
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('profile1') }}">PROFILE</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('requests1') }}">REQUESTS</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('requestshistory1') }}">REQUESTS HISTORY</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('') }}">LOGOUT</a></li>
                
            </ul>
    </div>
    <div>
        <h1 class="text-center ml-48 text-3xl font-semibold text-red-700 mt-6">BLOOD REQUESTS</h1>
        <div class="grid grid-cols-2 gap-0 gap-y-5 grid justify-items-center mt-4 text-sm -ml-16 text-center pl-12 ml-36 font-semibold ">
<div class ="border-2 border-orange-600 w-96 h-36 px-8 ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<p class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</p>
</div>
<div class ="border-2 border-orange-600 w-96 h-36 px-8">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<p class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</p>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<p class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</p>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<p class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</p>
</div>
<div class ="border-2 border-orange-600 w-96 h-32  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<p class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</p>
</div>
<div class ="border-2 border-orange-600 w-96 h-32  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<p class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</p>
</div>

</div>
    </div>
</div>

@endsection

</body>
</html>