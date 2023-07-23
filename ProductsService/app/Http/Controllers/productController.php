<?php
namespace App\Http\Controllers;
use App\Services\ProductsService;

use Illuminate\Http\Request;

class productController extends Controller
{
    protected $productsService;

    public function __construct(ProductsService $productsService)
    {
        $this->productsService = $productsService;
    }

    public function getProducts($id)
    {
        $user = $this->productsService->getProducts($id);

        return response()->json($user);
    }

  

    // Define other controller methods as needed
}