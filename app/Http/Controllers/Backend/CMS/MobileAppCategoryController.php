<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MobileAppCategoryService;

class MobileAppCategoryController extends Controller
{
    public function __construct(MobileAppCategoryService $MobileAppCategory)
    {
        $this->MobileAppCategory = $MobileAppCategory;
    }

    public function index()
    {  


        $mobileAppCategories = $this->MobileAppCategory->get();

        return view('backend.dashboards.admin.mobileAppCategories.index', compact('mobileAppCategories'));

    }
}
