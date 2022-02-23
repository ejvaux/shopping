<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeaderCart extends Component
{
    public $cart;
    public $total;

    public function mount()
    {
        //session()->forget('cart');
        $this->refreshCart();
    }

    protected function getListeners()
    {
        return [
            'refreshCart',
        ];
    }

    public function refreshCart()
    {
        $this->cart = (array) session()->get('cart');
        $this->total = 0;
        foreach ($this->cart as $details) {
            $this->total += $details['price']/* * $details['quantity']*/;
        }
    }

    public function getTotal($cart)
    {
        foreach ($cart as $details) {
            $this->total += $details['price']/* * $details['quantity']*/;
        }
    }

    public function render()
    {
        return view('livewire.header-cart');
    }
}
