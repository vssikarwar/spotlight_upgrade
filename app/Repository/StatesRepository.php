<?php
namespace App\Repository;

use App\Models\States;

class StatesRepository implements StatesRepositoryInterface
{
    public function get()
    {
        return States::paginate(10);
    }


    public function saveData($request)
    {
        
        States::create(
            array_merge
            (
                $request->only('name','active','state_code','country_id','country_name','alias')
            )
        );
    }

    public function updateStatus($States, $status)
    {
        States::where('id', $States['id'])
        ->update([
            'active' => $status
         ]);
    }

    public function update($request, $States)
    {
        $result = $States->update((array_merge(
            $request->only('name','active','state_code')
        ))); 
    }

}