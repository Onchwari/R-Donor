@extends('layouts.masterLayout')
<html>
    
<body>

@section('content')

<div class="w-full min-h-screen flex justify-center items-center">
  <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:items-stretch md:space-x-12 bg-red-700 w-full max-w-4xl p-8 sm:px-12 sm:py-10 rounded-xl shadow-lg text-white overflow-hidden">
    <div class="md:py-4 flex-grow flex flex-col space-y-8 md:justify-between">
      <div class="">
        <h1 class="font-bold text-4xl tracking-wide">Contact Us</h1>
        <p class=" text-sm pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugiat dicta iusto reprehenderit eum nihil similique.</p>
      </div>
      <div class="flex flex-col space-y-6">
        <div class="inline-flex space-x-2 items-center">
          <ion-icon name="call" class="text-xl "></ion-icon>
          <span class="select-all">+(123) 456 7890</span>
        </div>
        <div class="inline-flex space-x-2 items-center">
          <ion-icon name="mail" class="text-xl "></ion-icon>
          <span class="select-all">contact@xyzwebsite.com</span>
        </div>
        <div class="inline-flex space-x-2 items-center">
          <ion-icon name="location" class="text-xl "></ion-icon>
          <span class="select-all">11, Street 342, Abcd Fgh</span>
        </div>
      </div>
      <div class="flex space-x-4 text-lg">
        <a href="#" class="hover:text-teal-300"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#" class="hover:text-teal-300"><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#" class="hover:text-teal-300"><ion-icon name="logo-linkedin"></ion-icon></a>
        <a href="#" class="hover:text-teal-300"><ion-icon name="logo-instagram"></ion-icon></a>
      </div>
    </div>
    <div class="relative z-10">
      <div class="absolute -top-28 -right-28 z-0 bg-orange-600 w-40 h-40 rounded-full"></div>
      <div class="absolute -bottom-16 -left-28 z-0 bg-orange-600 w-40 h-40 rounded-full"></div>
      <div class="relative z-10 w-full md:w-80 h-full bg-white p-8 text-gray-600 rounded-xl shadow-lg" style="min-height: 300px">
        <form action="" class="flex flex-col space-y-4">
          <div>
            <label for="" class="text-sm">Your name</label>
            <input type="text" placeholder="Your name" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-600" />
          </div>
          <div>
            <label for="" class="text-sm">Email Address</label>
            <input type="text" placeholder="Email Address" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-600" />
          </div>
          <div>
            <label for="" class="text-sm">Message</label>
            <textarea placeholder="Type your message here" class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-orange-600" rows="4"></textarea>
          </div>
          <button class="inline-block self-end bg-orange-600 text-white font-bold rounded-lg px-6 py-2 uppercase text-sm">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection

</body>
</html>