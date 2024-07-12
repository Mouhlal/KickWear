<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits</title>
    @vite('resources/css/app.css')

</head>
<body>

      <!--Nav-->
      @include('pages.nav')

<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ cartOpen: false , isOpen: false }" class="bg-gray-100 min-h-screen">
    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="relative top-5">
                <h3 class="text-gray-600 text-2xl font-medium">Fashions</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach($all_produits as $product)
                    <a href="{{route('produits.show',$product->id)}}">
                        <div class="w-full max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-96 relative  w-full bg-cover bg-center" style="background-image: url('{{ asset('storage/'.$product->image) }}')">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{$product->titre}}</h3>
                                <span class="text-gray-500 mt-2">DHS {{$product->prix}}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>
