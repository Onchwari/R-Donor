@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')

<div class=" bg-cover bg-center bg-no-repeat">
<h1 class="text-center font-medium text-5xl text-red-900 top-32  ">BLOOD DRIVES</h1>
<div class="grid grid-cols-4 gap-0 gap-y-5 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12 font-serif ">
@foreach($user as $user)
<div class ="  w-52 h-56  px-8 rounded-lg">
<img class=" border-2 border-zinc-900 scale:50 hover:scale-110 ease-in duration-500 " src="/assests/users/{{$user->Photo}}">
<p>{{$user->Instituition}}<br>{{$user->Date}}<br>{{$user->Time}}<br>{{$user->Address}}</p>
</div>
@endforeach
</div>


</div>
<br><br><br><br><br><br><br>
@endsection

</body>

</html>