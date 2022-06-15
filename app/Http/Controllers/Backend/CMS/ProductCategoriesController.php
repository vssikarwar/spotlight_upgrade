<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductCategoriesService;

class ProductCategoriesController extends Controller
{
    public function __construct(ProductCategoriesService $ProductCategories)
    {
        $this->ProductCategories = $ProductCategories;
    }

    public function index()
    {  


        $productCategories = $this->ProductCategories->get();

        return view('backend.dashboards.admin.productCategories.index', compact('productCategories'));

    }
}
