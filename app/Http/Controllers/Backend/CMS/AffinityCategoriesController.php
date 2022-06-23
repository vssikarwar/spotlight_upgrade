<?php

namespace App\Http\Controllers\Backend\CMS;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AffinityCategoriesService;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\Admin\AffinityCategories;




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

    public function add()
    {
        return view('backend.dashboards.admin.affinityCategories.add');
    }

    public function import()
    {

    }

    public function export()
    {
        
    }

}