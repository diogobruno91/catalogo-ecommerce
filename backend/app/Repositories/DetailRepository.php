<?php

namespace App\Repositories;

use App\Models\Detail;

class DetailRepository
{
    public function findById($id)
    {
        return Detail::find($id);
    }
}