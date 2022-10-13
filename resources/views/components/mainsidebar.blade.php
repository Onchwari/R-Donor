
<div class="flex w-[100vw] h-full divide-x overflow-x-hidden ">

<div class="w-[25%] bg-red-700 flex justify-center ">
    <div class="flex flex-col space-y-4 items-center px-4">
        <div class="container py-4">
        <h1 class="text-4xl font-bold p-2 pb-4">R-D<a class="text-orange-600">o</a>nor</h1>
            <h1 class="text-center text-2xl font-semibold text-white">MENU</h1>
        </div>
        <div>
        <h3 class="text-lg font-medium text-white">Welcome,<span class="text-orange-600"> {{session('name')}}</span></h3>
        </div>
        <div class="container flex flex-col space-y-4 text-lg font-medium font-base text-white">
            <div class="mt-4 flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-address-card hover:text-orange-600"></i>
                <a href="{{url('admin/mainadmin/profile')}}" class=" hover:text-orange-600">Profile</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-users hover:text-orange-600"></i>
                <a href="{{ url('admin/mainadmin/donors') }}" class="hover:text-orange-600">View Donors</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-users hover:text-orange-600"></i>
                <a href="{{ url('admin/mainadmin/recipients') }}" class="hover:text-orange-600">View Recipients</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-users hover:text-orange-600"></i>
                <a href="{{ url('admin/mainadmin/admin') }}" class="hover:text-orange-600">View Admins</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-message hover:text-orange-600"></i>
                <a href="{{ url('admin/mainadmin/requests') }}" class=" hover:text-orange-600">View Requests</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
            <i class="fa-solid fa-calendar-plus hover:text-orange-600"></i>
                <a href="{{ url('admin/mainadmin/blooddrives') }}" class="hover:text-orange-600">Blood Drives</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-orange-600">
                <i class="fa-solid fa-lock hover:text-orange-600"></i>
                <a href="../../logout" class="hover:text-orange-600">Logout</a>
            </div>
        </div>
    </div>
</div>

<div class="w-[100%]">
    @yield('content')
</div>

</div>
