<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Http\Request;

class VendasController extends Controller
{

    public function index()
    {
        $vendas = Vendas::with('produtos')->get();
        return json_encode($vendas);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $cartItems = $request->all();

        foreach ($cartItems as $cartItem) {
            $product = $cartItem['product'];
            $quantity = $cartItem['quantity'];

            $cart = new Vendas();
            $cart->produtos_id = $product['id'];
            $cart->created_at = $product['created_at'];
            $cart->quantidade = $quantity;
            $cart->save();
        }

        return response()->json(['message' => 'Opração realizada com sucesso'], 200);

    }


    public function show(Vendas $vendas)
    {
        //
    }


    public function edit(Vendas $vendas)
    {
        //
    }


    public function update(Request $request, Vendas $vendas)
    {
        //
    }


    public function destroy(Vendas $vendas)
    {
        //
    }
}
