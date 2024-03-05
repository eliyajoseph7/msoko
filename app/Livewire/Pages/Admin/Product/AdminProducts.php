<?php

namespace App\Livewire\Pages\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProducts extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public $showForm = false;

    // public $active;

    protected $listeners = [
        'update_product' => 'toggleForm',
    ];


    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    #[On('product_saved')]
    public function reload()
    {
        $this->reset('showForm');
        $this->render();
    }

    #[On('delete_product')]
    public function deleteProduct($id)
    {

        $images = ProductImage::where('product_id', $id)->get();
        foreach ($images as $key => $image) {

            $image = $image->image;

            $imgname = str_replace(substr($image, 0, 9), '', $image);
            $check = Storage::disk('public')->exists($imgname);
            if ($check) {
                Storage::disk('public')->delete($imgname);
            }

            $image->delete();
        }
        Product::find($id)->delete();

        $this->dispatch('product_deleted');
    }

    public function sortColumn($name)
    {
        if ($this->sortBy == $name) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortBy = $name;
        $this->sortDir = 'DESC';
    }
    public function render()
    {
        $data = Product::search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage);
        return view('livewire.pages.admin.product.admin-products', compact('data'));
    }
}
