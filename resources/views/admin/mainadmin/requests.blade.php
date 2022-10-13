@extends('layouts.mainadminlayout')
<html>
    
<body>

@section('content')
<div class="w-full mt-4 flex justify-center">
    <table class="table-auto rounded-md">
        <thead class="text-white bg-red-700">
            <tr>
                <th class="px-6 py-3">Id</th>
                <th class="px-6 py-3">DonorId</th>
                <th class="px-6 py-3">RecipientId</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-6 py-4">{{$user->id}}</td>
                <td class="px-6 py-4">{{$user->donorId}}</td>
                <td class="px-6 py-4">{{$user->recipientId}} </td>
                <td class="px-6 py-4">{{$user->status}} </td>

                

                <td class="px-6 py-4 "><a href="{{url('admin/requests/delete/'.$user->id)}}"> <button class="bg-orange-600 text-white hover:border-2 hover:border-red-700 py-1 px-4 rounded-md"
                       >Delete</button></a> </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection

</body>

</html>