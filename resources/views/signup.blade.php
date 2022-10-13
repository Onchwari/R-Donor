@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')



<div class="w-full h-[850px] px-24 flex">
<div class="grid grid-cols-2 gap-0 h-[800px] m-auto   shadow-lg shadow-red-700">
    <div class="">
        <img class ="h-[800px]  w-full"src="{{url('/images/LOGINSIGNUP.jpg')}}">
    </div>
    <div class=" justify-items-center  p-4">
        <form action="{{route('register-user')}}" method="post" enctype="multipart/form-data"class="flex flex-col space-y-1">
          @if(Session::has('success'))
          <div class="alert text-black">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert text-black">{{Session::get('fail')}}</div>
          @endif
          @csrf
        <h1 class="text-center font-bold text-2xl text-red-700 tracking-wide ">SIGNUP</h1>
        <div>
            <label for="" class="text-sm font-semibold">Name</label>
            <input type="text" placeholder="Name" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600"name="Name" value="{{old('Name')}}"/>
            <span class="text-xs text-red-300">@error('Name') {{$message}} @enderror</span>
          </div>
          <div>
            <label for="" class="text-sm font-semibold">Age</label>
            <input type="text" placeholder="Age" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" name="Age" value="{{old('Age')}}"/>
            <span class="text-xs text-red-300">@error('Age') {{$message}} @enderror</span>
          </div>
          <div>
            <label for="" class="text-sm font-semibold">Bloodgroup</label>
            <input type="text" placeholder="Bloodgroup" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" name="Bloodgroup" value="{{old('Bloodgroup')}}"/>
            <span class="text-xs text-red-300">@error('Bloodgroup') {{$message}} @enderror</span>
          </div>
        <div>
            <label for="" class="text-sm font-semibold">Email Address</label>
            <input type="text" placeholder="Email Address" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" name="Email" value="{{old('Email')}}"/>
            <span class="text-xs text-red-300">@error('Email') {{$message}} @enderror</span>
          </div>
          <div>
            <label for="" class="text-sm font-semibold">Number</label>
            <input type="text" placeholder="Phone" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" name="Number" value="{{old('Number')}}"/>
            <span class="text-xs text-red-300">@error('Number') {{$message}} @enderror</span>
          </div>
          <div>
            <label for="" class="text-sm font-semibold">Password</label>
            <input type="password" placeholder="Password" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-2 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" name="Password"value="{{old('Password')}}"/>
            <span class="text-xs text-red-300">@error('Password') {{$message}} @enderror</span>
          </div>
          <div>
            <label for="" class="text-sm font-semibold">Address</label>
            <input type="text" placeholder="Address" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600" name="Address" value="{{old('Address')}}"/>
            <span class="text-xs text-red-300">@error('Address') {{$message}} @enderror</span>
          </div>
          <div>
          <label for=""class="text-sm font-semibold">Profile photo:</label>
          <input type="file" id="Photo" name="Photo" class=" mt-2 w-full rounded-md px-4 py-0.5 outline-none "value="{{old('Photo')}}"/>
          <span class="text-xs text-red-300">@error('Photo') {{$message}} @enderror</span>
          </div>
          <div>
          <label for=""class="text-sm font-semibold">Usertype:</label>
<select class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-0.5 outline-none hover:border-2 hover:border-orange-600 focus:ring-2 focus:ring-orange-600"id="user" name="Usertype" value=
"{{old('Usertype')}}">
  <option value="Recipient">Recipient</option>
  <option value="Donor">Donor</option>
  
</select>
<span class="text-xs text-red-300">@error('Usertype') {{$message}} @enderror</span>
          </div>
          <button class=" justify-content-center bg-orange-600 text-white font-bold rounded-lg px-6 py-0.5 uppercase text-sm mt-6 hover:border-2 hover:border-red-700" type="submit">Signup</button>
          
        </form>
        <a class=" flex flex-col space-y-4 text-center font-medium hover:font-semibold hover:text-red-700" href="{{ url('login') }}">Already have an account? Log in</a>
    </div>

</div>
</div>

@endsection

</body>

</html>