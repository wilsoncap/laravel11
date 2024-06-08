<?php

namespace App\Modules\Product\Domain\Repositories;

use App\Modules\Product\Domain\Entities\Product;

interface ProductRepositoryInterface
{
    public function findById(int $id): ?Product;
}
