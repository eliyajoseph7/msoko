<?php

namespace App\Livewire\Pages\Public\Product;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.public.guest')]
class AllProducts extends Component
{
    public function render()
    {
        return view('livewire.pages.public.product.all-products');
    }
}
