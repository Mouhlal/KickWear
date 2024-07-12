<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$produit->titre}}</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Material Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
            <img src="{{asset('storage/'.$produit->image)}}" class="h-full w-full object-cover" />
        </div>
        <div class="p-6">
            <div class="mb-2 flex items-center justify-between">
                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">{{$produit->titre}}</p>
                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">Dhs {{$produit->prix}}</p>
            </div>
            <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">{{$produit->description}}</p>
        </div>
        <div class="p-6 pt-0">
            <button class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-85 active:scale-100 active:opacity-85 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Add to Cart
            </button>
        </div>
    </div>
</body>
</html>
