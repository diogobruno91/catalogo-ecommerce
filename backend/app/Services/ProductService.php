<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function listAll($perPage = 10)
    {
        return $this->productRepository->getAll($perPage);
    }

    public function findById($id)
    {
        return $this->productRepository->getById($id);
    }

    public function findByCategory($categoryId)
    {
        return $this->productRepository->getByCategory($categoryId);
    }

    public function findByDetail($categoryId)
    {
        return $this->productRepository->getByDetail($categoryId);
    }

    public function searchProducts($query)
    {
        return $this->productRepository->search($query);
    }
}
