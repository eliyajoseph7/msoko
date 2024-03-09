<?php

namespace App\Livewire\Pages\Public\Product;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.public.guest')]
class ProductDetails extends Component
{
    public $id;

    public function mount($id) {
        $this->id = $id;
    }

    public function render()
    {
        $product = Product::find($this->id);
        $products = Product::where('id', '!=', $this->id)->oldest()->limit(5)->get();
        return view('livewire.pages.public.product.product-details', compact('product', 'products'));
    }
}
