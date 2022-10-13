{{-- TODO: User navbar and footer --}}

@extends('layouts.master')

@section('layoutContent')
<x-usernavbar />
 
<div class="flex w-[100vw] h-full divide-x overflow-x-hidden ">

<div class="w-[25%] bg-red-700 flex justify-center ">
    <div class="flex flex-col space-y-4 items-center px-4">
        <div class="container py-4">
        
            <h1 class="text-center text-2xl font-semibold text-white">MENU</h1>
        </div>
        <div>
        <h3 class="text-lg font-medium text-white">Welcome,<span class="text-orange-600"> User</span></h3>
        </div>
        <div class="container flex flex-col space-y-4 text-lg font-medium font-base text-white">
            <div class="mt-4 flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-address-card hover:text-orange-600"></i>
                <a href="{{url('recipients/profile')}}" class=" hover:text-orange-600">Profile</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-users hover:text-orange-600"></i>
                <a href="{{ url('recipients/requests') }}" class="hover:text-orange-600">Requests</a>
            </div>
            
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-lock hover:text-orange-600"></i>
                <a href="../logout" class="hover:text-orange-600">Logout</a>
            </div>
        </div>
</div>
</div>

<div class="w-[100%]">
    @yield('content')
</div>

</div>
<x-footer />

@endsection