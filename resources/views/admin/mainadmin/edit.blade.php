@extends('layouts.master')
<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-20 ">
<div class="bg-white rounded shadow-lg w-1/3 text-center items-center">
    <form action="{{url('admin/mainadmin/update-data/'.$user->id)}}"method="post"enctype="multipart/form-data"class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2">
        @csrf
        @method('put')
    <div class="border-b px-4 py-2 flex justify-between items-center">
        <h2 class="text-3xl font-semibold text-red-700 font-serif"> EDIT BLOODDRIVE</h2>
        </div>
        <div class="py-2 mr-6">
            <label class="font-medium pr-2"  for="">Institution:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Instituition"value="{{$user->Instituition}}">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Time:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Time"value="{{$user->Time}}">
        </div>
        
        <div class="py-2 -mr-8">
            <label class="font-medium pr-6"for="">Date:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Date"value="{{$user->Date}}">
        </div>
        <div class="py-2">
            <label class="font-medium pr-6"for="">Address:</label>
            <input class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="text"name="Address"value="{{$user->Address}}">
        </div>
        <div class="py-2">
            <label class="font-medium pr-8"for="">Poster:</label>
            <input class="  rounded -mr-20 hover:border-orange-600 focus:border-2 focus:border-orange-600" type="file"name="Photo"value="">
            <img class="h-48 w-56"src="/assests/users/{{$user->Photo}}">
        </div>
        <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">Save</button>
    </form>
</div>
</div>