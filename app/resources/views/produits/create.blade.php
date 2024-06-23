<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>

   </head>
<body class="bg-gray-100 p-6">

    <h1 class="text-2xl font-bold mb-4">Ajoutation des Produits</h1>

    <form action="{{route('produits.store')}}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="titre" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="titre" id="titre" value="{{old('titre')}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            @error('titre')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="prix" class="block text-sm font-medium text-gray-700">Prix</label>
            <input type="text" name="prix" id="prix" value="{{old('prix')}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            @error('prix')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="description" id="description" value="{{old('description')}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="stocks" class="block text-sm font-medium text-gray-700">Quantite du Produits</label>
            <input type="number" name="stocks" id="stocks" value="{{old('stocks')}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            @error('stocks')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="submit" value="Add" class="bg-blue-500 text-white px-4 py-2 rounded-md">
        </div>
    </form>

</body>
</html>
