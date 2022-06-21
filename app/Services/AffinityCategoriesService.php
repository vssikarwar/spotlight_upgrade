<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;
use Illuminate\Support\Facades\DB;


class AffinityCategoriesService
{

    public function get() 
    { 

          return AffinityCategories::paginate(20);
    
        
    } 

    public function rightjoin()
    {

        $result = DB::table('affinity_categories n')
        ->rightJoin('affinity_categories p', 'n.id', '=', 'p.parent_id')
        ->select('p.id', 'n.googleid', 'p.name', 'p.alias', 'p.status', 'n.name as parent')
        ->get();
        return $result::paginate(20);

    }
    
 
} 