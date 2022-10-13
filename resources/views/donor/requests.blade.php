@extends('layouts.donorlayout')
<html>
    
<body>

@section('content')

<div>

    <div class="-ml-24">
        <h1 class="text-center ml-48 text-3xl font-semibold text-red-700 mt-6">BLOOD REQUESTS</h1>
    <div class="grid grid-cols-2 gap-0 gap-y-5 grid justify-items-center mt-4 text-sm -ml-16 text-center pl-12 ml-36 font-semibold ">
@foreach($user as $user)
<div class ="border-2 border-orange-600 w-96 h-36 px-8 ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="/assests/users/{{$user->Photo}}">
<p class="-mt-20 ml-10">{{$user->Name}}<br>Blood Group:{{$user->Bloodgroup}}</p><br>

<!-- <div>
<button class="rounded-full hover:ring hover:ring-red-700 -mt-4 px-4 py-1 ml-24 bg-orange-600 open-modal">View full information</button> 
    <div class="another-modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-80 hidden">
    <!-- modal 
    <div class="bg-white rounded shadow-lg w-1/3 text-center items-center">
    <div class="border-b px-4 py-2 flex justify-between items-center">
    <h2 class="text-3xl font-semibold text-red-700 font-serif"> REQUEST INFO</h2>
    <button class="text-black close-page">&cross;</button>
</div>
    <div class="space-y-2 text-lg">
                        <p>Full Name: <span class="text-base font-medium"></span></p>
                        <p>Hospital: <span class="text-base font-medium"></span></p>
                        <p>Time : <span class="text-base font-medium"></span></p>
                        <p>Date: <span class="text-base font-medium"></span></p>
                        <p>Address: <span class="text-base font-medium"></span></p>
                        <p>Reason: <span class="text-base font-medium"></span></p>


                    
    <div class="flex justify-end items-center w-100 border-t p-3 ">
        <br>
        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-4 -mt-2 close-page">Cancel</button>
    </div>
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
    </script> -->



<a href="{{url('donor/accept-request/'.$user->id)}}"><button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accept</button></a>
<a href="{{url('donor/reject-request/'.$user->id)}}"><button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-12 bg-orange-600">Reject</button></a>
</div>
@endforeach
<!-- <div class ="border-2 border-orange-600 w-96 h-36 px-8">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accept</button>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-12 bg-orange-600">Reject</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accept</button>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-12 bg-orange-600">Reject</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accept</button>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-12 bg-orange-600">Reject</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accept</button>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-12 bg-orange-600">Reject</button>
</div>
<div class ="border-2 border-orange-600 w-96 h-36  px-8   ">
<img class="rounded-full h-24 w-24 -ml-4 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="{{url('images/profile.png')}}">
<p class="-mt-20 ml-10">Betty Yuda<br>Blood Group:A+</p><br>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-24 bg-orange-600">Accept</button>
<button class="rounded-full hover:ring hover:ring-red-700 mt-2 px-4 py-1 ml-12 bg-orange-600">Reject</button>
</div> -->

</div>
    </div>
</div>

@endsection

</body>
</html>