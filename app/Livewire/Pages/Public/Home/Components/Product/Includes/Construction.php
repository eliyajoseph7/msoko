<?php

namespace App\Livewire\Pages\Public\Home\Components\Product\Includes;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Construction extends Component
{
    use WithPagination;
    public $limit = 4;
    public $page;
    public $search = '';
    // public $constructiondata;

    #[On('load_more_construction')]
    public function loadMore() {
        // $this->limit += 1;
        // $this->fetch();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    // public function fetch() {
    //     if($this->page == 'summary') {
    //         $this->constructiondata = ProductCategory::where('slug', 'construction')->with(['products' => function($qs) {
    //             $qs->latest()->limit($this->limit);
    //         }])->first();
    //     } else {
    //         $this->constructiondata = ProductCategory::search($this->search)->where('slug', 'construction')->with(['products' => function($qs) {
    //             $qs->latest()->paginate(2);
    //         }])->first();
    //     }
    // }

    public function mount($page) {
        $this->page = $page;
        // $this->dispatch('$refresh');
    }

    public function render()
    {
        if($this->page == 'summary') {
            $constructiondata = Product::where('product_category_id', 1)->latest()->limit($this->limit)->get();
        } else {
            $constructiondata = Product::search($this->search)->where('product_category_id', 1)->latest()->paginate(6);
        }
        
        return view('livewire.pages.public.home.components.product.includes.construction', compact('constructiondata'));
    }


}
