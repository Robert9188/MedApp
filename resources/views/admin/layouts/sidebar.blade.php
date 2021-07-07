<div class="w-[20vw] min-h-[100vh] bg-gradient-to-r from-red-500 to-yellow-500 shadow-2xl flex flex-col relative">
    <div class="w-full text-center py-5 border-b border-gray-100">
        <h3 class="">
            <a href="{{route('employee.dashboard')}}" class="text-2xl font-bold text-gray-200">Dashboard</a>
        </h3>
    </div>
    <div class="profile-name my-5 mx-14 text-left">
        <h4 class="">
            <span class="text-xl text-gray-200 mr-2">
                <i class="bi bi-person-circle"></i>
            </span>
            <span class="text-xl text-gray-200">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span>
        </h4>
    </div>
    <div class="ml-10 my-5">
        <ul class="space-y-[1px]">

            <x-dash-li :href="route('employee.profiles')"  :active="request()->routeIs('employee.profiles')">
                <span class="mr-2">
                    <i class="bi bi-people"></i>
                </span>
                Profiles
            </x-dash-li>

            <x-dash-li :href="route('employee.reservations')"  :active="request()->routeIs('employee.reservations')">
                <span class="mr-2">
                        <i class="bi bi-recycle"></i>
                    </span>
                Reservation
            </x-dash-li>

            <x-dash-li :href="route('employee.departements')"  :active="request()->routeIs('employee.departements')">
                <span class="mr-2">
                    <i class="bi bi-layers-half"></i>
                </span>
                Departements
            </x-dash-li>

            <x-dash-li :href="route('employee.services')"  :active="request()->routeIs('employee.services')">
                <span class="mr-2">
                        <i class="bi bi-journal-check"></i>
                    </span>
                Services
            </x-dash-li>

            <x-dash-li :href="route('employee.days')"  :active="request()->routeIs('employee.days')">
                <span class="mr-2">
                    <i class="bi bi-calendar3"></i>
                </span>
                Jours et Heures
            </x-dash-li>

        </ul>
    </div>


   <div class="relative w-full">
       <div class="fixed bottom-0 left-[5vw] flex justify-center items-center my-2">
           <form id="logout" action="{{route('employee.logout')}}" method="post" class="">
               @csrf
               <button type="submit"
                       class="px-6 py-2 bg-white rounded-full shadow-3xl text-red-500 font-bold outline-none focus:ring-0"
                       onclick="
                    document.getElementById('form').submit();"
               >Deconnexion</button>
           </form>
       </div>
   </div>

</div>
