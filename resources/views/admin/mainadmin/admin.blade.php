@extends('layouts.mainadminlayout')
<html>
    
<body>

@section('content')
<div class="w-full mt-4 flex justify-center">
    <table class="table-auto rounded-md">
        <thead class="text-white bg-red-700">
            <tr>
                <th class="px-6 py-3">Id</th>
                <th class="px-6 py-3">Name</th>
                <th class="px-6 py-3">Age</th>
                <th class="px-6 py-3">Number</th>
                <th class="px-6 py-3">Email Address</th>
                <th class="px-6 py-3">Address</th>
                <th class="px-6 py-3">Photo</th>

                <th class="px-6 py-3">Action</th>

            </tr>
        </thead>
        <tbody>
            
        @foreach($user as $user) 
            <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-6 py-4">{{$user->id}}</td>
                <td class="px-6 py-4">{{$user->Name}}</td>
                <td class="px-6 py-4">{{$user->Age}} </td>
                <td class="px-6 py-4">{{$user->Number}}</td>
                <td class="px-6 py-4">{{$user->Email}}</td>
                <td class="px-6 py-4">{{$user->Address}}</td>
                <td class="px-6 py-4">
                    <img class="h-24 w-24"src="/assests/users/{{$user->Photo}}"></td>
                    <td class="px-6 py-4 "><a href="{{url('admin/mainadmin/admin/delete/'.$user->id)}}"><button class="bg-orange-600 hover:border-2 hover:border-red-700 text-white py-1 px-4 rounded-md"
                       >Delete</button></a> </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
<div>
<button class="bg-red-700 rounded w-48 px-8 py-1.5 mt-4 shadow-md hover:bg-orange-600 text-lg -mt-18 mr-12 object-center text-center float-right open-modal">Add</button> 
    <div class="another-modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-80 hidden">
    <!-- modal -->
    <div class="bg-white rounded shadow-lg w-1/3 text-center items-center">
    <form action="{{route('register-admin')}}" method="post" enctype="multipart/form-data"class="-p-4 pt-2 text-center justify-center flex flex-col space-y-1">
         @if(Session::has('success'))
          <div class="alert text-black">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert text-black">{{Session::get('fail')}}</div>
          @endif
          @csrf
    <div class="border-b px-4 py-2 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-red-700 font-serif"> ADD ADMIN</h2>
        <button class="text-black close-page">&cross;</button>
        </div>
        <div class="py-2 mr-6">
            <label class="font-medium pr-2"  for="">Name:</label>
            <input name="Name" class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"value="{{old('Name')}}"><br>
            <span class="text-xs text-red-300">@error('Name') {{$message}} @enderror</span>
        </div>
        <div class="py-2 mr-4">
            <label class="font-medium pr-6"for="">Age:</label>
            <input name="Age"class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"value="{{old('Age')}}"><br>
            <span class="text-xs text-red-300">@error('Age') {{$message}} @enderror</span>
        </div>
        
        <div class="py-2 mr-4">
            <label class="font-medium pr-6"for="">Number:</label>
            <input name="Number"class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"value="{{old('Number')}}"><br>
            <span class="text-xs text-red-300">@error('Number') {{$message}} @enderror</span>
        </div>
        <div class="py-2 mr-4">
            <label class="font-medium pr-6"for="">Password:</label>
            <input name="Password"class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="password" value="{{old('Number')}}"><br>
            <span class="text-xs text-red-300">@error('Password') {{$message}} @enderror</span>
        </div>
        <div class="py-2 mr-10">
            <label class="font-medium pr-6"for="">Email Address:</label>
            <input name="Email"class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"value="{{old('Email')}}"><br>
            <span class="text-xs text-red-300">@error('Email') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input name="Address" class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"value="{{old('Address')}}"><br>
            <span class="text-xs text-red-300">@error('Address') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-8"for="">Photo:</label>
            <input class="  rounded -mr-20 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="file" name="Photo"value="{{old('Photo')}}"><br>
            <span class="text-xs text-red-300">@error('Photo') {{$message}} @enderror</span><br>
            <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 mt-2 -mr-2 rounded text-white"type="submit"name="save">Register</button>
        </div>
    </form>
      <div class="flex justify-end items-center w-100 border-t p-3 ">
        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 -mt-24 close-page">Cancel</button>
        
      </div>
    </div>
  </div>

  <script>
    const anothermodal = document.querySelector('.another-modal');
    const showPage = document.querySelector('.open-modal');
    const closePage = document.querySelectorAll('.close-page');
    showPage.addEventListener('click', function (){
        anothermodal.classList.remove('hidden')
    });
    
    closePage.forEach(close => {
        close.addEventListener('click', function (){
            anothermodal.classList.add('hidden')
        });
    });
    </script>
</div>

@endsection

</body>

</html>