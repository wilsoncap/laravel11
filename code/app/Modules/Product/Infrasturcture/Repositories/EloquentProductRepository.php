<?php

namespace App\Modules\Product\Infrastructure\Repositories;

use App\Modules\Product\Domain\Entities\Product;
use App\Modules\Product\Domain\Repositories\ProductRepositoryInterface;
use App\Models\Product as EloquentProduct;

class EloquentProductRepository implements ProductRepositoryInterface
{
    public function findById(int $id): ?Product
    {
        $eloquentProduct = EloquentProduct::find($id);
        if ($eloquentProduct) {
            return new Product(
                $eloquentProduct->id,
                $eloquentProduct->name,
                $eloquentProduct->price
            );
        }
        return null;
    }
}
