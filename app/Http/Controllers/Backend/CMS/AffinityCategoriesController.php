<?php

namespace App\Http\Controllers\Backend\CMS;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AffinityCategoriesService;
use Illuminate\Support\Facades\DB;



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


    public function rightjoin()
    {

        $result = DB::table('affinity_categories')
        ->rightJoin('affinity_categories', 'n.id', '=', 'p.parent_id')
        ->select('p.id', 'n.googleid', 'p.name', 'p.alias', 'p.status', 'n.name as parent')
        ->get();
        return $result;

    }

    public function new()
    {

    }

    public function import()
    {

    }

    public function export()
    {
        
    }

}