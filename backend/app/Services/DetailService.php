<?php

namespace App\Services;

use App\Repositories\DetailRepository;

class DetailService
{
    protected $detailRepository;

    public function __construct(DetailRepository $detailRepository)
    {
        $this->detailRepository = $detailRepository;
    }

    public function getDetailById($id)
    {
        return $this->detailRepository->findById($id);
    }
}
