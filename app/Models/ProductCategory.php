<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function scopeSearch($qs, $keyword)
    {
        $qs->WhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('short_description', 'like', '%' . $keyword . '%')
                ->orWhere('price', 'like', '%' . $keyword . '%');
            });
    }
}
