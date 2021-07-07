<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Rendez-Vous</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="h-96 w-full bg-gray-100 p-10">
        <div class="w-full h-full flex flex-col justify-start py-1">
            <h1 class="text-gray-600">Bonjour monsieur/madame {{$reservation->user->first_name}} {{$reservation->user->last_name}}</h1>
        </div>
        <div class="mb-3">
            <p class="">Votre reservation du {{$reservation->created_at->format('d-m-Y')}} a été Revokée</p>
            <p class="">Motif: {{ $motif }}</p>
        </div>
        <div class="space-y-3 my-5 py-2">
            <p class="text-blue-700">Merci de Bien vouloir consulter votre profile pour les détails en appuyant sur le boutton ci-après</p>
            <a href="{{$profileLink}}" class="bg-blue-800 rounded px-6 py-2 hover:bg-opacity-90 text-white uppercase">Profile</a>
        </div>
    </div>
</body>
</html>
