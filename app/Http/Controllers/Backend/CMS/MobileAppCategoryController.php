<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MobileAppCategory;

class MobileAppCategoryController extends Controller
{
    public function index()
    {
        $mobileAppCategories = MobileAppCategory::paginate(10);

        return view('backend.dashboards.admin.mobileAppCategories.index', compact('mobileAppCategories'));

    }
}
