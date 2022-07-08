<?php
namespace App\Repository;

use App\Models\TimeZones;
use App\Models\Backend\Admin\AffinityCategories;

class TimeZonesRepository implements TimeZonesRepositoryInterface
{
    public function get()
    {
        return TimeZones::paginate(10);
    }


    public function saveData($request)
    {
        TimeZones::create(
            array_merge
            (
                $request->only('name','iso_alpha_2','iso_alpha_3','iso_numeric','dailing_code','currency','active','shopping_ads')
            )
        );
    }

    public function updateStatus($timeZones, $status)
    {
        TimeZones::where('id', $timeZones['id'])
        ->update([
            'status' => $status
         ]);
    }

    public function update($request, $timeZones)
    {
        $result = $timeZones->update((array_merge(
            $request->only('name','iso_alpha_2','iso_alpha_3','iso_numeric','dailing_code','currency','active','shopping_ads')
        ))); 
    }

}