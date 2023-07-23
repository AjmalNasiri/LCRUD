<?php
namespace App\Services;

use App\Models\Product;


class ProductsService
{
    public function getProducts($id)
    {
        $user = product::find($id);

        return $user;
    }

    // Define other service methods as needed
}