<div class="w-full py-8 p-2 border-b border-gray-100/25">
    <div class="px-20 flex justify-between items-center text-gray-600 font-bold">
        <div class="">
            <x-application-logo class="w-14 h-full"/>
        </div>
        <ul class="flex space-x-6 capitalize">
            <li class="text-md">
                <a href="#home" class="">Accueil</a>
            </li>
            <li class="text-md">
                <a href="#services" class="">Services</a>
            </li>
            <li class="text-md">
                <a href="#rendez-vous" class="">Rendez-vous</a>
            </li>
            <li class="text-md">
                <a href="#about" class="">A propos</a>
            </li>
            <li class="text-md">
                <a href="#contact" class="">Contact</a>
            </li>
        </ul>
        <ul class="flex space-x-5">
            <li class="">
                <a href="{{route('login')}}" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:bg-gradient-to-l">Connexion</a>
            </li>
            <li class="">
                <a href="{{'register'}}" class="px-4 py-2 bg-blue-500 text-white rounded from-blue-500 via-green-500 to-green-200 hover:bg-gradient-to-l shadow-md capitalize transition-bg duration-500">S'inscrire</a>
            </li>
        </ul>
    </div>
</div>
