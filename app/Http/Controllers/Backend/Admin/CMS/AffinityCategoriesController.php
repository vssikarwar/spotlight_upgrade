<?php

namespace App\Http\Controllers\Backend\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AffinityCategoriesService;

class AffinityCategoriesController extends Controller
{
    public function __construct(AffinityCategoriesService $AffinityCategories)
    {
        $this->AffinityCategories = $AffinityCategories;
    }

    public function index()
    {
        
        $affinityCategories = $this->AffinityCategories->get();

        return view('backend.dashboards.admin.affinityCategories.index', compact('affinityCategories'));
    }
}