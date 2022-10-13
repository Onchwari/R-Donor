@extends('layouts.adminlayout')
<html>
    
<body>

@section('content')
<div class="w-full mt-4 flex justify-center">
    <table class="table-auto rounded-md">
        <thead class="text-white bg-red-700">
            <tr>
            <th class="px-6 py-3">Id</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Age</th>
                <th class="px-4 py-3">Bloodgroup</th>
                <th class="px-4 py-3">Number</th>
                <th class="px-4 py-3">Email Address</th>
                <th class="px-4 py-3">Address</th>
                <th class="px-4 py-3">Photo</th>

                <th class="px-6 py-3">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr class="border-b px-24 odd:bg-white even:bg-gray-50">
                <td class="px-4 py-4">{{$user->id}}</td>
                <td class="px-4 py-4">{{$user->Name}}</td>
                <td class="px-4 py-4"> {{$user->Age}}</td>
                <td class="px-10 py-4">{{$user->Bloodgroup}}</td>
                <td class="px-4 py-4">{{$user->Number}}</td>
                <td class="px-4 py-4">{{$user->Email}}</td>
                <td class="px-4 py-4">{{$user->Address}}</td>
                <td class="px-4 py-4"><img class="h-120 w-120"src="/assests/users/{{$user->Photo}}"></td>

                <td class="px-6 py-4 "><a href="{{url('admin/recipients/delete/'.$user->id)}}"><button class="bg-orange-600 hover:border-2 hover:border-red-700 text-white py-1 px-4 rounded-md"
                       >Delete</button></a> </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>

</html>