<?php 

namespace App\Modules\Product\Application\UseCases;

use App\Modules\Product\Domain\Repositories\ProductRepositoryInterface;

class GetProductUseCase
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute(int $id)
    {
        return $this->productRepository->findById($id);
    }
}
