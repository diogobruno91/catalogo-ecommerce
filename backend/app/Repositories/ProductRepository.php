<?php

namespace App\Repositories;

use App\Http\Resources\ProductCollection;
use App\Models\Product;

class ProductRepository
{
    public function getAll($perPage = 10)
    {
        $products = Product::paginate($perPage);
        return new ProductCollection($products);
    }

    public function getById($id)
    {
        return Product::find($id);
    }

    public function getByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->paginate(10);
        return new ProductCollection($products);
    }

    public function getByDetail($detailId)
    {
        $products = Product::where('detail_id', $detailId)->paginate(10);
        return new ProductCollection($products);
    }

    public function search($query)
    {
        $products = Product::where('name', 'LIKE', "%$query%")
                           ->orWhere('description', 'LIKE', "%$query%")
                           ->paginate(10);
                           
        return new ProductCollection($products);
    }
}