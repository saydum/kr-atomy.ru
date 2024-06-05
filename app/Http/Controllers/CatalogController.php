<?php

namespace App\Http\Controllers;

use Modules\Catalog\Models\Product;
use Modules\Catalog\Models\Category;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('web.catalog.index', compact('products'));
    }
    public function slug($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $products = $category->products;
        return view('web.catalog.index', compact('products'));
    }

    public function show(Product $product)
    {
        $this->seoTagsSave($product);
        return view('web.catalog.show', compact('product'));
    }
}
