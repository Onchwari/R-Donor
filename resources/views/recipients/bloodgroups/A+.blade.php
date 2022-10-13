@extends('layouts.donorslayout')

<html>
    
<body>

@section('content')

<div class="-ml-24">
    
    <div>
        <h1 class="text-center ml-48 text-3xl font-semibold text-red-700 mt-6">DONORS</h1>
    </div>
  

    <div class="grid grid-cols-4 gap-0 gap-y-5 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12 ml-36 font-semibold ">
        @foreach($user as $user)
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="/assests/users/{{$user->Photo}}">
<p>{{$user->Name}}<br>Blood Group: {{$user->Bloodgroup}}</p>
<div>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-2 bg-orange-600 open-modal">Send Request</button>

    <div class="another-modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-80 hidden">
    <!-- modal -->
    <div class="bg-white rounded shadow-lg w-1/3 text-center items-center">
    <form action="" method="" enctype="multipart/form-data"class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2">
    
    <div class="border-b px-4 py-2 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-red-700 font-serif"> REQUEST INFO</h2>
        <button class="text-black close-page">&cross;</button>
        </div>
        <div class="py-2 mr-6">
            <label class="font-medium pr-2"  for="">Full Name:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text" name="Instituition"value=""/>
            
        </div>
        <div class="py-2 mr-6">
            <label class="font-medium pr-2"  for="">Hospital:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text" name="Hospital"value=""/>
            
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Time:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Time"value=""><br>
        </div>

        <div class="py-2">
            <label class="font-medium pr-6"for="">Date:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Date"value=""><br>
        </div>
        
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Address" value=""/><br>
            
        </div>

        <div class="py-2">
            <label class="font-medium pr-6"for="">Reason:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Address" value=""/><br>
            
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
</div>
</div>
</div>

@endforeach 
</div>



</div>
</div>
<br><br>
@endsection

</body>
</html> 