@extends('layouts.mainadminlayout')
<html>
    
<body>

@section('content')
<div class="w-full mt-4 flex justify-center">
    <table class="table-auto rounded-md">
        <thead class="text-white bg-red-700">
            <tr>
            <th class="px-6 py-3">Id</th>
            <th class="px-6 py-3">Posters</th>
                <th class="px-6 py-3">Instituiton</th>
                <th class="px-6 py-3">Time</th>
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Address</th>
                

                <th colspan="2" class="px-6 py-3">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-6 py-4">{{$user->id}}</td>
                <td class="px-6 py-4"><img class="h-120 w-120"src="/assests/users/{{$user->Photo}}"></td>
                <td class="px-6 py-4"> {{$user->Instituition}}</td>
                <td class="px-6 py-4">{{$user->Time}}</td>
                <td class="px-6 py-4">{{$user->Date}}</td>
                <td class="px-6 py-4">{{$user->Address}}</td>
                
                <td class="px-6 py-4 "><a href="{{url('admin/mainadmin/edit/'.$user->id)}}"><button class="bg-orange-600 hover:border-2 hover:border-red-700 text-white py-1 px-4 rounded-md"
                       >Edit</button></a> </td>
                       
            <!-- <div>
                       <td class="px-6 py-4 "><button class="bg-orange-600 hover:border-2 hover:border-red-700 text-white py-1 px-4 rounded-md show-modal">Edit</button> </td>
    <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-80 hidden">
    <!-- modal 
    <div class="bg-white rounded shadow-lg w-1/3 text-center items-center">
    <form class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2">
    <div class="border-b px-4 py-2 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-red-700 font-serif"> EDIT BLOODDRIVE</h2>
        <button class="text-black close-modal">&cross;</button>
        </div>
        <div class="py-2 mr-6">
            <label class="font-medium pr-2"  for="">Institution:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Time:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        
        <div class="py-2 -mr-8">
            <label class="font-medium pr-6"for="">Date:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text">
        </div>
        <div class="py-2">
            <label class="font-medium pr-8"for="">Poster:</label>
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


                    <td class="px-6 py-4 "><a href="{{url('/admin/mainadmin/blooddrives/delete/'.$user->id)}}"><button class="bg-orange-600 hover:border-2 hover:border-red-700 text-white py-1 px-4 rounded-md"
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
    <form action="{{route('add-drive')}}" method="post" enctype="multipart/form-data"class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2">
    @if(Session::has('success'))
          <div class="alert text-black">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert text-black">{{Session::get('fail')}}</div>
          @endif
          @csrf
    <div class="border-b px-4 py-2 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-red-700 font-serif"> ADD BLOODDRIVE</h2>
        <button class="text-black close-page">&cross;</button>
        </div>
        <div class="py-2 mr-6">
            <label class="font-medium pr-2"  for="">Institution:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text" name="Instituition"value="{{old('Instituition')}}"/><br>
            <span class="text-xs text-red-300">@error('Instituition') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Time:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Time"value="{{old('Time')}}"><br>
            <span class="text-xs text-red-300">@error('Time') {{$message}} @enderror</span>

        </div>
        
        <div class="py-2 -mr-8">
            <label class="font-medium pr-6"for="">Date:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Date"value="{{old('Date')}}"><br>
            <span class="text-xs text-red-300">@error('Date') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Address" value="{{old('Address')}}"/><br>
            <span class="text-xs text-red-300">@error('Address') {{$message}} @enderror</span>
        </div>
        <div class="py-2">
            <label class="font-medium pr-8"for="">Poster:</label>
            <input class="  rounded -mr-20 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="file"name="Photo" value="{{old('Photo')}}"/><br>
          <span class="text-xs text-red-300">@error('Photo') {{$message}} @enderror</span>

        </div>
        <div>
        <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 mt-2 -mr-20 rounded text-white"type="submit"name="save">Add</button>
        <div>
    </form>
      <div class="flex justify-end items-center w-100 border-t p-3 ">
        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-4 -mt-14 close-page">Cancel</button>
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