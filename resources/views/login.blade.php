@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')



<div class="w-full h-[450px] flex">
<div class="grid grid-cols-2 gap-0 h-[390px] m-auto shadow-lg shadow-red-700">
    <div class="">
        <img class ="h-[390px] w-full"src="{{url('/images/LOGINSIGNUP.jpg')}}">
    </div>
    <div class=" justify-items-center  p-4">
        <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data"class="flex flex-col space-y-4">
        @if(Session::has('success'))
          <div class="alert text-red">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert text-red">{{Session::get('fail')}}</div>
          @endif
          @csrf
        <h1 class="text-center font-bold text-2xl text-red-700 tracking-wide ">LOGIN</h1>
        <div>
            <label for="" class="text-sm font-semibold">Email Address</label>
            <input type="text" placeholder="Email Address" name="Email"  value="{{old('Email')}}" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" />
            <span class="text-xs text-red-300">@error('Email') {{$message}} @enderror</span>
          </div>
          <div>
            <label for="" class="text-sm font-semibold">Password</label>
            <input type="password" placeholder="Password"name="Password" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-2 py-2 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" />
            <span class="text-xs text-red-300">@error('Password') {{$message}} @enderror</span>
          </div>
          <button class=" justify-content-center bg-orange-600 text-white font-bold rounded-lg px-6 py-2 uppercase text-sm mt-6 hover:border-2 hover:border-red-700">Login</button>
          <a class="text-center font-medium hover:font-semibold  hover:text-red-700"href="">Forgot Password?Click Here</a>
        </form>
        <a class="  flex flex-col space-y-4 text-center font-medium hover:font-semibold hover:text-red-700" href="{{ url('signup') }}">Don't have an account? Sign up</a>
        <a class=" flex flex-col space-y-4 text-center font-medium hover:font-semibold hover:text-red-700" href="{{ url('adminlogin') }}">Admin login</a>
    </div>

</div>
</div>

@endsection

</body>

</html>