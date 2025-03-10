<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAll($perPage = 10)
    {
        return Product::paginate($perPage);
    }

    public function getById($id)
    {
        return Product::find($id);
    }

    public function getByCategory($categoryId)
    {
        return Product::where('category_id', $categoryId)->paginate(10);
    }

    public function search($query)
    {
        return Product::where('name', 'LIKE', "%$query%")
                      ->orWhere('description', 'LIKE', "%$query%")
                      ->paginate(10);
    }
}