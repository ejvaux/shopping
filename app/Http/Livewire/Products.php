<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Products extends Component
{
    public $products;

    public function mount()
    {
        $this->getProducts();
    }

    protected function getListeners()
    {
        return [
            'addProduct',
            'getCart',
        ];
    }

    public function getProducts()
    {
        $this->products = Product::all();
    }

    public function getProduct($id)
    {
        return Product::find($id);
    }

    public function getCart()
    {
        return session()->get('cart');
    }

    public function addProduct($id)
    {
        $product = $this->getProduct($id);
        if(!$product) {
            abort(404);
        }
        $cart = $this->getCart();

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "title" => $product->title,
                    //"quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);
            session()->flash('message', $product->title.' added successfully.');
        }
        else{
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
                session()->flash('message', $product->title.' already added.');
            }
            else {
                // if item not exist in cart then add to cart
                $cart[$id] = [
                    "title" => $product->title,
                    "price" => $product->price,
                    "photo" => $product->photo
                ];

                session()->put('cart', $cart);
                session()->flash('message', $product->title.' added successfully.');
            }
        }
        $this->emit('refreshCart');
        $this->getProducts();
    }

    public function render()
    {
        return view('livewire.products-table');
    }
}
