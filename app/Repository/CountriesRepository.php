<?php
namespace App\Repository;

use App\Models\Countries;

class CountriesRepository implements CountriesRepositoryInterface
{
    public function get()
    {
        return Countries::paginate(10);
    }


    public function saveData($request)
    {
        Countries::create(
            array_merge
            (
                $request->only('name','iso_alpha_2','iso_alpha_3','iso_numeric','dailing_code','currency','active','shopping_ads')
            )
        );
    }

    public function updateStatus($countries, $status)
    {
        Countries::where('id', $countries['id'])
        ->update([
            'active' => $status
         ]);
    }

    public function update($request, $countries)
    {
        $result = $countries->update((array_merge(
            $request->only('name','iso_alpha_2','iso_alpha_3','iso_numeric','dailing_code','currency','active','shopping_ads')
        ))); 
    }

}