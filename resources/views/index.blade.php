@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')

<div>
    <div class="bg-[url('/images/p2.avif')] border-b-4 border-orange-600 bg-cover bg-center bg-no-repeat h-full">
    <!--<img class="h-80 w-1/2"src =" {{url('/images/poster.jpg')}}"/>-->
    <p class="text-center  pt-48 font-bold"> <span class="text-6xl"><span class="text-red-700">W</span>E<span class="text-red-700">L</span>C<span class="text-red-700">O</span>M<span class="text-red-700">E</span> T<span class="text-red-700">O</span> R-<span class="text-red-700">D</span>O<span class="text-red-700">N</span>O<span class="text-red-700">R</span></span> <br> <span class="text-2xl font-bold">DONATE BLOOD, <span class="text-red-700">SAVE A LIFE</span></span></p>
    <a class ="bg-red-700 rounded w-48 px-8 py-1.5 shadow-md hover:bg-orange-600 text-lg mt-12 mr-96 object-center text-center float-right  "href =" ">Signup/Login</a>
</div>
<br><br>
<div class="grid grid-cols-3 gap-0 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12  ">
<div class ="border-2 border-orange-600 w-52 h-56 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-red-700">WHO WE ARE</h5>
<p>We are a group of university students who saw a gap in the blood donation system and developed this project to directly link donors to recipients</p>
</div>
<div class ="border-2  border-orange-600 w-52 h-56 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-red-700">OUR MISSION</h5>
<p>To enhance the wellbeing of patients who use our services by assuring a reliable, easy and economical access to blood.</p>
</div>
<div class ="border-2 border-orange-600 w-52 h-56 bg-gray-400 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-red-700">OUR VISION</h5>
<p>R-DONOR will be recognized for saving and improving lives in our community with safe and reliable blood</p>
</div>
</div>
<br><br>
<div>
<div class="bg-[url('/images/pst.jpg')] border-b-4 border-t-4 border-orange-600 h-96 bg-cover bg-center bg-no-repeat ">
<p class="text-8xl ml-32 pb-10 pt-24 float-right mr-24 font-serif">Give Blood,<br> Save a Life</p>
</div>
<div class="px-32 leading-8">
<br>
<img class="object-left float-left h-80 w-5/12 " src="{{url('images/logo.png')}}">
<br>
<h2 class=" font-semibold text-red-900 text-center  uppercase text-3xl"> WHY DONATE BLOOD?</h2><br>
    <ul class="list-disc  text-lg pr-10">
        <li>Blood is the most precious gift that anyone can give to another person-the gift of life</li>
        <li>Help someone in need</li>
        <li>You are somebody's type, Please donate.</li>
</ul>
<br><br><br><br><br>
</div>

</div>



@endsection

</body>
</html>