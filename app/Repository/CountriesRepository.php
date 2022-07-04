<?php
namespace App\Repository;

use App\Models\Countries;

class CountriesRepository implements CountriesRepositoryInterface
{
    public function get()
    {
        $result = Countries::rightJoin('affinity_categories as p', 'affinity_categories.id', '=', 'p.parent_id')
        ->select('p.id', 'affinity_categories.googleid', 'p.name', 'p.alias', 'p.status', 'affinity_categories.name as parent')
        ->paginate(15);

        return $result;

    }


    public function saveData($request, $alias)
    {
        AffinityCategories::create(
            array_merge
            (
                $request->only('parent_id','googleid','name','status'),
                ['alias' => $alias]
            )
        );
    }

    public function updateStatus($affinityCategories, $status)
    {
        AffinityCategories::where('id', $affinityCategories['id'])
        ->update([
            'status' => $status
         ]);
    }

    public function update($request, $affinityCategories, $alias)
    {
        $result = $affinityCategories->update((array_merge(
            $request->only('name','status'),
            ['alias' => $alias]
        ))); 
    }

}