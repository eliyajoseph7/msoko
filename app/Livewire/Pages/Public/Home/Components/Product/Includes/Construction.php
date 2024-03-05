<?php

namespace App\Livewire\Pages\Public\Home\Components\Product\Includes;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Attributes\On;
use Livewire\Component;

class Construction extends Component
{
    public $limit = 4;
    public $constructiondata;

    #[On('load_more_construction')]
    public function loadMore() {
        // $this->limit += 1;
        // $this->fetch();
    }

    public function fetch() {
        $this->constructiondata = ProductCategory::where('slug', 'construction')->with(['products' => function($qs) {
            $qs->latest()->limit($this->limit);
        }])->first();
    }

    public function mount() {
        $this->fetch();
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.pages.public.home.components.product.includes.construction');
    }


}
