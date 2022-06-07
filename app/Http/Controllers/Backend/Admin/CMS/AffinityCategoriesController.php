<?php

namespace App\Http\Controllers\Backend\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;

class AffinityCategoriesController extends Controller
{
    public function index()
    {
        $affinityCategories = AffinityCategories::latest()->paginate(20);
        return view('backend.dashboards.admin.affinityCategories.index', compact('affinityCategories'));
    }
}
