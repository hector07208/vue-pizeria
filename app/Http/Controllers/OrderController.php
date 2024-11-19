<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('client')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('orders.create', compact('clients'));
    }

    public function store(Request $request)
    {
        // Validar y guardar el pedido
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'total_price' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Pedido creado con éxito.');
    }

    public function edit(Order $order)
    {
        $clients = Client::all();
        return view('orders.edit', compact('order', 'clients'));
    }

    public function update(Request $request, Order $order)
    {
        // Validar y actualizar el pedido
        $request->validate([
            'client_id' => 'required',
            'total_price' => 'required|numeric',
            'status' => 'required',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Pedido actualizado con éxito.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pedido eliminado con éxito.');
    }
}

