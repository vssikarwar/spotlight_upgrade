<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    
    public function index()
    {
        $locations = Location::latest()->paginate(10);

        return view('backend.locations.index', compact('locations'));
    }

    public function addData(Request $request)  
    {  
        $location = new Location();

        $fields = ["name","website_url","region_code","state_id",
                    "city_id","address","postal_code","latitude","longitude","storeCode"];

                    foreach($fields as $field)
                    {
                        $location->$field = $request->$field; 
                    }

        
        /*
        *Temperoary fields
        */

        $location->group_id            = 724139660291831045857;
        $location->user_id             = 1;
        $location->administrative_area = 'Agra';
        $location->canUpdate           = 1;
        $location->canDelete           = 1;
        $location->isVerified          = 1;
        $location->isPublished         = 1;
        $location->location_type       = 'Google';

        $location->save();
         
    }

    public function create()
    {
        return view('backend.locations.create');
    }

    public function show($id)
    {
        return Location::find($id);
    }

    public function edit(Location $location)
    {
        return view('backend.locations.edit', [
            'location' => $location
        ]); 
    }

    public function update(Request $request)
    {
        // print_r($request->all());die;
        $location = Location::find($request->id);

        $fields = ["name","address","virtual_number","website_url","display_name"];

                    foreach($fields as $field)
                    {
                        $location->$field = $request->$field; 
                    }
                    $location->save();
                    return redirect('locations');


    }

    public function destroy()
    {

    }
}
