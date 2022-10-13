@extends('layouts.recipientslayout')
<html>
    
<body>

@section('content')

<div class="-ml-24">
    
    <div>
        <h1 class="text-center ml-48 text-3xl font-semibold text-red-700 mt-6">RECIPIENTS</h1>
        <div class="grid grid-cols-4 gap-0 gap-y-5 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12 ml-36 font-semibold ">
        @foreach($user as $user)
<div class ="border-2 border-orange-600 w-42 h-48  px-8  ">
<img class="rounded-full h-24 w-24 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500" src="/assests/users/{{$user->Photo}}">
<p>{{$user->Name}}<br>Blood Group: {{$user->Bloodgroup}}</p>
</div>
@endforeach

</div>
    </div>
</div>
<br><br>
@endsection

</body>
</html>