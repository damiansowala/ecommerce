<?php

namespace App\Http\Livewire\Backend\Orders;

use Livewire\Component;
use App\Models\Products\Product;
use App\Models\Order;
use App\Models\OrderItem;

class NewOrders extends Component
{
    public $search = '';
    public $products = [];
    public $selectedProducts = [];

    public function updatedSearch()
    {
        $this->products = Product::where('name', 'like', "%{$this->search}%")->limit(10)->get();
    }

    public function addProduct($productId)
    {
        $product = Product::find($productId);
        if ($product && !in_array($product->id, array_column($this->selectedProducts, 'id'))) {
            $this->selectedProducts[] = [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => 1
            ];
        }
    }

    public function updateQuantity($index, $quantity)
    {
        if (isset($this->selectedProducts[$index])) {
            $this->selectedProducts[$index]['quantity'] = max(1, (int)$quantity);
        }
    }

    public function removeProduct($index)
    {
        unset($this->selectedProducts[$index]);
        $this->selectedProducts = array_values($this->selectedProducts);
    }

    public function placeOrder()
    {
        $order = Order::create(['status' => 'pending']);
        foreach ($this->selectedProducts as $product) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product['id'],
                'quantity' => $product['quantity']
            ]);
        }
        $this->selectedProducts = [];
        session()->flash('message', 'Zamówienie zostało złożone.');
    }

    public function render()
    {
        return view('livewire.backend.orders.new-orders');
    }
}
