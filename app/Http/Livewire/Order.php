<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Order extends Component
{
    public $products;
    public $total;

    protected function getListeners()
    {
        return [
            'orderPaid',
        ];
    }

    public function mount()
    {
        $this->products = (array) $this->getCart();
        $this->getTotal();
    }

    public function orderPaid()
    {
        $cart = $this->getCart();
        $userId = Auth::user()->id;
        foreach ($cart as $id => $details) {
            \App\Library::updateOrCreate(
                [
                    'user_id' => $userId,
                    'product_id' => $id
                ]
            );
        }
        session()->forget('cart');
        return redirect()->to('/paid');
    }

    public function getTotal()
    {
        $this->total = 0;
        $cart = $this->getCart();
        foreach ($cart as $details) {
            $this->total += $details['price'];
        }
    }

    public function getCart()
    {
        return session()->get('cart');
    }

    public function render()
    {
        return view('livewire.order-table');
    }
}
