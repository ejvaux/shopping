<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $products;
    public $total;

    protected function getListeners()
    {
        return [
            'removeProduct',
        ];
    }

    public function mount()
    {
        $this->products = (array) $this->getCart();
        $this->getTotal();
    }

    public function removeProduct($id)
    {
        $cart = $this->getCart();
        if(isset($cart[$id])) {
            $title = $cart[$id]['title'];
            unset($cart[$id]);
            session()->put('cart', $cart);
            session()->flash('message', $title.' removed.');
        }
        else {
            session()->flash('message', $title.' already removed.');
        }
        $this->getTotal();
        $this->emit('refreshCart');
        $this->products = (array) $this->getCart();
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
        return view('livewire.cart-table');
    }
}
