<?php

namespace App\Livewire\Pages\Admin\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;

    public $action = 'add';
    public $id;

    #[Rule('required')]
    public $name;
    #[Rule('required')]
    public $price;
    #[Rule('required')]
    public $short_description;

    #[Rule('required')]
    public $description;

    #[Rule('required', as: 'Category')]
    public $product_category_id;

    #[Rule('required')]
    public $images = [];
    public $new_images = [];

    protected $listeners = [
        'update_product' => 'editProduct',
    ];


    public function addProduct()
    {
        $this->validate();

        $product = new Product;
        $product->name = $this->name;
        $product->price = $this->price;
        $product->product_category_id = $this->product_category_id;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->user_id = auth()->user()->id;
        $product->save();

        foreach ($this->images as $image) {
            $gallery = new ProductImage;
            $fileNameToSave = null;
            if ($image != null) {
                $this->file = (object)$image;
                try {
                    $file = $this->file->getClientOriginalName();
                    $extension = $this->file->getClientOriginalExtension();
                    $fileName = pathinfo($file, PATHINFO_FILENAME) . "-" . date('Ymd-His') . "." . $extension;
                    $this->file->storeAs('productImages', $fileName, 'public');

                    $fileNameToSave = '/storage/productImages/' . $fileName;
                } catch (\Throwable $e) {
                }
            }
            $gallery->image = $fileNameToSave;
            $gallery->product_id = $product->id;
            $gallery->save();
        }

        $this->resetForm();
        $this->dispatch('product_saved');
        $this->dispatch('show_success', 'Product saved successfully!');
    }

    public function editProduct($id)
    {
        $this->action = 'update';
        $qs = Product::find($id);
        $this->id = $id;
        $this->name = $qs->name;
        $this->price = $qs->price;
        $this->short_description = $qs->short_description;
        $this->description = $qs->description;
        $this->product_category_id = $qs->product_category_id;
        $this->images = $qs->images?->pluck('image');
        $this->dispatch('update_category_field', $this->product_category_id);
    }

    public function updateProduct()
    {
        $this->validate();

        $qs = Product::find($this->id);
        $qs->name = $this->name;
        $qs->price = $this->price;
        $qs->product_category_id = $this->product_category_id;
        $qs->short_description = $this->short_description;
        $qs->description = $this->description;

        $qs->save();
        foreach ($this->new_images as $image) {
            $gallery = new ProductImage;
            $fileNameToSave = null;
            if ($image != null) {
                $this->file = (object)$image;
                try {
                    $file = $this->file->getClientOriginalName();
                    $extension = $this->file->getClientOriginalExtension();
                    $fileName = pathinfo($file, PATHINFO_FILENAME) . "-" . date('Ymd-His') . "." . $extension;
                    $this->file->storeAs('productImages', $fileName, 'public');

                    $fileNameToSave = '/storage/productImages/' . $fileName;
                } catch (\Throwable $e) {
                }
                $gallery->image = $fileNameToSave;
            }
            $gallery->product_id = $this->id;
            $gallery->save();
        }

        $this->resetForm();
        $this->dispatch('product_saved');
        $this->dispatch('show_success', 'Product updated successfully!');
    }

    public function mount($id = null)
    {
        if ($id) {
            $this->editProduct($id);
        }
    }

    public function resetForm()
    {
        $this->dispatch('reset_category');
        $this->reset();
    }


    #[On('delete_product_image')]
    public function deleteProductImage($key)
    {
        $image = $this->images[$key];

        $imgname = str_replace(substr($image, 0, 9), '', $image);
        $check = Storage::disk('public')->exists($imgname);
        if ($check) {
            Storage::disk('public')->delete($imgname);
        }

        ProductImage::where('image', $image)->first()?->delete();
        $this->editProduct($this->id);
        $this->dispatch('product_image_deleted');
    }

    public function render()
    {
        $categories = ProductCategory::all();
        return view('livewire.pages.admin.product.product-form', compact('categories'));
    }
}
