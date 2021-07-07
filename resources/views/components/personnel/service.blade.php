@props(['services'])

<div id="services" class="bg-[#edf6f9] py-20 px-20">
   <div class="w-full  grid grid-cols-3 gap-8">
        <div class="col-span-2 py-10 px-5">
            <div class="w-full flex flex-col justify-center items-center">
                <div class="w-3/4">
                    <ul class="space-y-4">
                        @foreach($services as $service)
                        <li class="bg-white mx-4 inline-block rounded-md shadow-md px-2 py-1">{{$service->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        <div class="w-full h-full flex justify-center items-center py-5 px-8 rounded-md shadow-lg">
           <div class="w-full flex flex-col justify-center items-center space-y-8">
               <div class="w-full text-justify">
                   <p class="text-xl"> Notre équipes vous prends en charges tout au long de votre sejour.<br>N'hesiter pas a prendre un rendez-vous</p>
               </div>
               <div class="">
                   <div class="flex space-x-5">
                       <a href="{{ route('dashboard.reservations') }}" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-blue-500 via-green-500 to-green-200 hover:bg-gradient-to-l">Prendre Rendez-vous</a>
                   </div>
               </div>
           </div>
        </div>
   </div>
</div>
