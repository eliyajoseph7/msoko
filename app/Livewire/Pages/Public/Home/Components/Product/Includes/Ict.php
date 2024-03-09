<?php

namespace App\Livewire\Pages\Public\Home\Components\Product\Includes;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Ict extends Component
{
    use WithPagination;
    public $limit = 4;
    public $page;
    public $search = '';
    // public $ictdata;

    #[On('load_more_ict')]
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
    //         $this->ictdata = ProductCategory::where('slug', 'ict')->with(['products' => function($qs) {
    //             $qs->latest()->limit($this->limit);
    //         }])->first();
    //     } else {
    //         $this->ictdata = ProductCategory::search($this->search)->where('slug', 'ict')->with(['products' => function($qs) {
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
            $ictdata = Product::where('product_category_id', 2)->latest()->limit($this->limit)->get();
        } else {
            $ictdata = Product::search($this->search)->where('product_category_id', 2)->latest()->paginate(6);
        }
        
        return view('livewire.pages.public.home.components.product.includes.ict', compact('ictdata'));
    }
}
