<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Find the cart for the user
        $cart = Cart::where('user_id', $user->id)->first();

        // If the cart does not exist, initialize an empty collection
        if (!$cart) {
            $products = [];
        } else {
            // Get products associated with the cart
            $products = $cart->products;
        }

        // Pass products to the view
        return view('panier.monpanier', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId)
    {
        // Validate the request
        $request->validate([
            'quantite' => ['required', 'numeric', 'min:1']
        ]);

        $quantite = $request->input('quantite');
        $product = Produits::find($productId);
        $user = Auth::user();

        if (!$product || !$user) {
            return response('Something is wrong', 404);
        }

        // Find or create the cart for the user
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Check if the product is already in the cart
        $existingCartProduct = $cart->products()->where('produit_id', $product->id)->first();

        if ($existingCartProduct) {
            // Update the quantity if the product is already in the cart
            $cart->products()->updateExistingPivot($product->id, ['quantite' => $existingCartProduct->pivot->quantite + $quantite]);
        } else {
            // Attach the product to the cart with the specified quantite
            $cart->products()->attach($product->id, ['quantite' => $quantite]);
        }

        return back()->with('success', 'Item added to cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $panier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $panier)
    {
        $panier->delete();
        return back();
    }
}
