<?php 

namespace App\Modules\Product\Interface\Http\Controllers;

use App\Modules\Product\Application\UseCases\GetProductUseCase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private GetProductUseCase $getProductUseCase;

    public function __construct(GetProductUseCase $getProductUseCase)
    {
        $this->getProductUseCase = $getProductUseCase;
    }

    public function show($id)
    {
        $product = $this->getProductUseCase->execute($id);
        if ($product) {
            return response()->json($product);
        }
        return response()->json(['message' => 'Product not found'], 404);
    }
}
