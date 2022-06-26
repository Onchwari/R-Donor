@extends('layouts.donorlayout')
<html>
    
<body>

@section('content')

<div>
    <div class="bg-red-800 h-screen -mt-10 px-10 pt-48 pb-18 text-center leading-8 absolute">
        <h3 class="font-serif font-semibold -mt-10 text-xl">MENU<h3><br>
            <ul class="py-2">
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('profile') }}">PROFILE</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('requests') }}">REQUESTS</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('requestshistory') }}">REQUESTS HISTORY</a></li>
                <li><a class="hover:bg-orange-600 rounded px-2"href="{{ url('') }}">LOGOUT</a></li>
                
            </ul>
    </div>
<div>
    <form class="p-6 pt-16 ml-48 text-center ">
        <h2 class="text-3xl font-semibold text-red-700 font-serif">PROFILE</h2><br>
        <div class="py-2">
            <label class="font-medium pr-2"  for="">Name:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Age:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-4 text-center" for="">Bloodgroup:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-14 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6" for="">Password:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-12 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="password">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Number:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-8" for="">Email:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-8 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-8"for="">Photo:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded -mr-20 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="file">
        </div>
    </form>
    <a class ="bg-red-700 rounded w-48 px-8 py-1.5 shadow-md hover:bg-orange-600 text-lg -mt-14 mr-12 object-center text-center float-right  "href =" ">Edit</a>
</div>
</div>
    

@endsection

</body>
</html>