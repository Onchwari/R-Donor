@extends('layouts.mainadminlayout')
<html>
    
<body>

@section('content')


<div class="">
    <div class="">
    <form action="{{url('admin/mainadmin/update-data1')}}"method="post"enctype="multipart/form-data"class="px-20 pt-4 text-center  flex flex-col space-y-1">
    @csrf
        @method('PUT')
        <h2 class="text-3xl font-semibold text-red-700 font-serif">PROFILE</h2><br>
        <div class="py-2">
        <img class="rounded-full h-20 w-20 ml-96 text-center "src="/assests/users/{{$user->Photo}}">
        <label class="font-medium  -mt-24"for="">Change profile photo:</label><br>
            <input class="  rounded -mr-20 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="file"name="Photo"value="{{(old('Photo'))?old('Photo'):$user->Photo}}">
            <span class="text-xs text-red-300">@error('Photo') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-2"  for="">Name:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name= "Name" value="{{(old('Name'))?old('Name'):$user->Name}}">
            <span class="text-xs text-red-300">@error('Name') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Age:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Age"value="{{(old('Age'))?old('Age'):$user->Age}}">
            <span class="text-xs text-red-300">@error('Age') {{$message}} @enderror</span>
        </div>
        
        <div class="py-2">
            <label class="font-medium pr-6" for="">Password:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-12 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="password"name="Password"value="">
            <span class="text-xs text-red-300">@error('Password') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Number:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" name="Number"type="text"value="{{(old('Number'))?old('Number'):$user->Number}}">
            <span class="text-xs text-red-300">@error('Number') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-8" for="">Email:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-8 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Email" readonly value="{{(old('Email'))?old('Email'):$user->Email}}">
            <span class="text-xs text-red-300">@error('Email') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Address"value="{{(old('Address'))?old('Address'):$user->Address}}">
            <span class="text-xs text-red-300">@error('Address') {{$message}} @enderror</span>
        </div>
<div>
        <button class="bg-red-700 rounded w-48 px-8 py-1.5 shadow-md hover:bg-orange-600 text-lg -mt-18 mr-12 object-center text-center float-right">Edit</button>
</div> 
    </form>
    <!-- <div>
    <button class="bg-red-700 rounded w-48 px-8 py-1.5 shadow-md hover:bg-orange-600 text-lg -mt-18 mr-12 object-center text-center float-right show-modal">Edit</button>
    <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-80 hidden">
    <!-- modal 
    <div class="bg-white rounded shadow-lg w-1/3">
    <form class="-p-4 pt-4 text-center  flex flex-col space-y-2">
    <div class="border-b px-4 py-2 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-red-700 font-serif"> EDIT PROFILE</h2>
        <button class="text-black close-modal">&cross;</button>
        </div>
        <div class="py-2">
            <label class="font-medium pr-2"  for="">Name:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Age:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
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
            <input class="  rounded -mr-20 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="file">
        </div>
    </form>
      <div class="flex justify-end items-center w-100 border-t p-3 ">
        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal">Cancel</button>
        <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">Save</button>
      </div>
    </div>
  </div>

  <script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');
    showModal.addEventListener('click', function (){
        modal.classList.remove('hidden')
    });
    
    closeModal.forEach(close => {
        close.addEventListener('click', function (){
            modal.classList.add('hidden')
        });
    });
    </script>
</div> -->

</div>
</div>

@endsection

</body>

</html>