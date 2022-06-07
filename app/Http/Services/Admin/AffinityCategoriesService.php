<?php
namespace App\Http\Services\Admin;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;

class AffinityCategoriesService
{

    public function index()
    {
        $affinityCategories = AffinityCategories::latest()->paginate(20);
        return view('backend.dashboards.admin.affinityCategories.index', compact('affinityCategories'));
    }

}