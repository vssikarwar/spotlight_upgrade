<?php
namespace App\Repository;

use App\Models\Backend\Admin\AffinityCategories;

class AffinityCategoriesRepository implements AffinityCategoriesRepositoryInterface
{
    public function saveData($request)
    {
        // AffinityCategories::create(
        //     array_merge
        //     (
        //         $request->only('parent_id','googleid','name','status'),
        //         ['alias' => $alias]
        //     )
        // );
    }
}