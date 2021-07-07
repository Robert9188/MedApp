<div class="w-full h-[10vh] bg-white flex justify-between items-center px-5 shadow-xl">
    <h3 class="text-xl font-bold text-gray-600">
        <span class="mr-2 cursor-pointer font-bold px-2">
            <i class="bi bi-grid-3x3-gap"></i>
        </span>
        <a href="{{route('employee.dashboard')}}" class="">Dashboard</a>
    </h3>

    <div class="profile-navigation">
        <a href="javascript:void(0)" class="">
            <span class="text-lg text-yellow-600 mr-2">
                <i class="bi bi-person-circle"></i>
            </span>
            <span class="text-lg text-gray-500">{{ auth()->guard('employee')->user()->first_name }} {{ auth()->guard('employee')->user()->last_name }}</span>
        </a>
    </div>
</div>
