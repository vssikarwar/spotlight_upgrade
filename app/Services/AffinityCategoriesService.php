<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;


class AffinityCategoriesService
{

    public function get() 
    { 

        $result = AffinityCategories::rightJoin('affinity_categories as p', 'affinity_categories.id', '=', 'p.parent_id')
        ->select('p.id', 'affinity_categories.googleid', 'p.name', 'p.alias', 'p.status', 'affinity_categories.name as parent')
        ->paginate(15);
        return $result;
    
    } 
    
    
 
} 