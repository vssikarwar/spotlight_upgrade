<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Services\CmsCategoriesService;


class CmsCategoriesController extends Controller
{
    public function __construct(CmsCategoriesService $CmsCategories)
    {
        $this->CmsCategories = $CmsCategories;
    }

    public function index()
    {  


        $cmsCategories = $this->CmsCategories->get();

        return view('backend.dashboards.admin.cmsCategories.index', compact('cmsCategories'));
       
    }
}
