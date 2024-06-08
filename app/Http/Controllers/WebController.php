<?php

namespace App\Http\Controllers;

use Modules\Catalog\Models\Category;

class WebController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('web.index',
            [
                'categories' => $categories
            ]);
    }
}
