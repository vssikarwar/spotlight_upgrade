<?php

namespace App\Http\Controllers\Backend\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\AffinityCategoriesService;

class AffinityCategoriesController extends Controller
{
    public function index()
    {
        $AffinityCategories = new AffinityCategoriesService();
        
        $affinityCategories = $AffinityCategories->get();

        return view('backend.dashboards.admin.affinityCategories.index', compact('affinityCategories'));
    }
}