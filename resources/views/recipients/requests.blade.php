@extends('layouts.userlayout')
<html>
    
<body>

@section('content')

<div class="-ml-24">

<div>
        <h1 class="text-center ml-48 text-3xl font-semibold text-red-700 mt-6">BLOOD REQUESTS</h1>
        <div class="grid grid-cols-2 gap-0 gap-y-5 grid justify-items-center mt-4 text-sm -ml-16 text-center pl-12 ml-36 font-semibold ">
        @foreach($user as $user)
<div class ="border-2 border-orange-600 w-96 h-36 px-8 ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="/assests/users/{{$user->Photo}}">
<p class="-mt-20 ml-10">{{$user->Name}}<br>Blood Group:{{$user->Bloodgroup}}</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">{{$user->status}}</button>
</div>
@endforeach
<!-- <div class ="border-2 border-orange-600 w-96 h-36 px-8">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Pending</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Rejected</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accepted</button>

</div> -->

</div>
    </div>
</div>

@endsection

</body>
</html>