<?php



namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('attributes.attribute')->get();
        return response()->json($products);
    }
}

