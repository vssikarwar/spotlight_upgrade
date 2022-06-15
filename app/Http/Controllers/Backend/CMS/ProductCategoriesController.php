<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategories;

class ProductCategoriesController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategories::paginate(10);

        return view('backend.dashboards.admin.productCategories.index', compact('productCategories'));

    }
}
