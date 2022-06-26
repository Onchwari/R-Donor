@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')
<br>
<div>
<h1 class="text-center font-medium text-5xl text-red-900 top-32  ">BLOOD TYPES</h1>
   
<div class=" leading-8">
<br>
<img class="object-left float-left h-96 w-82 pl-4 " src="{{url('images/bloodtypes.png')}}">
<div class="grid grid-cols-3 gap-0 gap-y-5 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12  ">
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8  rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">A+</h5>
<p>If your blood type is A positive, your red blood cells can potentially help an A positive or AB positive patient.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">A-</h5>
<p>If your blood type is A negative, your red blood cells can potentially help an A positive, A negative, AB positive or AB negative patient.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">B+</h5>
<p>If your blood type is B positive, your red blood cells can potentially help a B positive or AB positive patient.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">B-</h5>
<p>If your blood type is B negative, your red blood cells can potentially help a B positive, B negative, AB positive or AB negative patient.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">O+</h5>
<p>If your blood type is O positive, your red blood cells can potentially help an O positive, A positive, B positive or AB positive patient.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">O-</h5>
<p>If your blood type is O negative, your red blood cells can potentially help patients with any blood type.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">AB+</h5>
<p>If your blood type is AB positive, your red blood cells can potentially help an AB positive patient.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-52 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-lg text-red-700">AB-</h5>
<p>If your blood type is AB negative, your red blood cells can potentially help an AB positive or AB negative patient.</p>
</div>
</div>
<br>
</div>

@endsection

</body>
</html>