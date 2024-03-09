<?php

namespace App\Livewire\Pages\Public\Product;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('livewire.layout.public.guest')]
class AllProducts extends Component
{
    public $active = 'construction';

    #[On('set_active_tab')]
    public function sitchTab($tab) {
        $this->active = $tab;
    }

    public function render()
    {
        return view('livewire.pages.public.product.all-products');
    }
}
