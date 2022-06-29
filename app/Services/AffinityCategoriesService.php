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
    
    public function add($request): void
    {
        $alias = str_replace(' ','-',strtolower(request()->all()['name']));
        AffinityCategories::create
        (
            array_merge
            (
                $request->only('parent_id','googleid','name','status'),
                ['alias' => $alias]
            )
        );
    
    }



    public function statusUpdate($affinityCategories)
    {
      if($affinityCategories['status'] == 1)
      {
        $status = 0;
      }
      else
      {
        $status = 1;
      }

        // $result = $affinityCategories->update(['status' => $status]);

        AffinityCategories::where('id', $affinityCategories['id'])
        ->update([
            'status' => $status
         ]);

    }

    public function delete($affinityCategories) 
    {
       $result = $affinityCategories->delete();

    }

    public function update($request, $affinityCategories)
    {
        //echo "<pre>";print_r(request()->all());die;
        $alias = str_replace(' ','-',strtolower(request()->all()['name']));
        $result = $affinityCategories->update((array_merge(
            $request->only('name','status'),
            ['alias' => $alias]
        ))); 
    }

} 