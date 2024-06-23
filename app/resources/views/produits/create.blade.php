<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>

    <h1>Ajoutation des Produits</h1>

    <form action="{{route('produits.store')}}" method="POST" >
        @csrf
        Title : <input type="text" name="titre" value="{{old('titre')}}"> <br>
        @error('titre')
            {{$message}}
        @enderror
        image : <input type="file" name="image" value="{{old('image')}}"> <br>
        @error('image')
        {{$message}}
        @enderror
        Prix : <input type="text" name="prix" value="{{old('prix')}}"> <br>
        @error('prix')
        {{$message}}
        @enderror
        Description <input type="text" name="description" value="{{old('description')}}"> <br>
        @error('description')
        {{$message}}
        @enderror
        Quantite du Produits <input type="number" name="stocks" value="{{old('stocks')}}"> <br>
        @error('stocks')
        {{$message}}
    @enderror
        <input type="submit" value="Add">
    </form>

</body>
</html>
