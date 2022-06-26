@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')

<div class="bg-[url('/images/bg.jpg')]  bg-cover bg-center bg-no-repeat ">
    <br><br>
<div class="grid grid-cols-3 gap-0 grid justify-items-center mt-2 text-sm -ml-16  pl-12  ">
<div class ="border-2 border-orange-600 w-64 h-80 bg-gray-200 opacity-80 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-red-700 text-lg">Who can donate</h5>
<ul class="list-disc ">
<li>You need to be generally fit and well</li>
<li>You need to be aged between 17 and 65</li>
<li>You need to weigh between 50kg and 158kg</li>
<li>You need to have not donated blood in the past 56 days</li>
</ul>
</div>
<div class ="border-2 border-orange-600 w-64 h-80 bg-gray-200 opacity-80 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-red-700 text-lg">Who can't donate</h5>
<ul class="list-disc ">
<li>If you have had most types of cancer</li>
<li>If you have some heart conditions</li>
<li>If you have tested positive for HIV</li>
<li>If you are a hepatitis B  or C carrier</li>
<li>If you have injected non-prescribed drugs including body-building a
</div>
<div class ="border-2 border-orange-600 w-64 h-80 bg-gray-200 px-8 opacity-80 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-red-700 text-lg">Reasons you might need to wait</h5>

<ul class="list-disc ">
<li>If you feel ill</li>
<li>If you are pregnant</li>
<li>If you have had a baby in the lst 6 months</li>
<li>If you have recently got a tattoo or piercing</li>
<li>If you are undergoing assessment or investigations for a medical condition. For example, heart condition</li>
</ul>
</div>
</div>
   

<br><br><br>

</div>


@endsection

</body>

</html>