<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsCategories;

class CmsCategoriesController extends Controller
{
    public function index()
    {
        $cmsCategories = CmsCategories::paginate(10);

        return view('backend.dashboards.admin.cmsCategories.index', compact('cmsCategories'));
       
    }
}
