<?php
namespace App\Http\Controllers\Backend;
   
use App\Http\Controllers\Controller;
use App\Services\DemoOne;
use Illuminate\Http\Request;
use App\Models\Location;

   
class TestController extends Controller
{
    public function create()
    {
        return view('backend.test.locations');
    }


    
    public function addData(Request $request)
    
    {


        // echo "<pre>";
        // print_r($request->all());die;


        // $dataToSave = $request->all();
        // unset($dataToSave['_token']);
        // $dataToSave = array_merge($dataToSave,[
        //     'group_id'              => 724139660291831045857,
        //     'user_id'               => 1,
        //     'administrative_area'   => 'Agra',
        //     'canUpdate'             => 1,
        //     'canDelete'             => 1,
        //     'isVerified'            => 1,
        //     'isPublished'           => 1,
        //     'location_type'         => 'Google',
        // ]);
        // $id = Location::insertGetId($dataToSave);


        // foreach (Location::all() as $location) {
        //    echo  $location->name . " ";
        //     echo $location->clientId . "<br>";
            
        // }

        //print_r($request->all());die;

        // $this->locations::create($data);
        
        $location = new Location();

        $fields = ["name","website_url","region_code","state_id",
                    "city_id","address","postal_code","latitude","longitude","storeCode"];

                    foreach($fields as $field)
                    {
                        $location->$field = $request->$field; 
                    }

        

        // $location->name        = $request->name;

        // $location->website_url = $request->website_url;
        // $location->region_code = $request->region_code;
        // $location->state_id    = $request->state_id;
        // $location->city_id     = $request->city_id;
        // $location->address     = $request->address;
        // $location->postal_code = $request->postal_code;
        // $location->latitude    = $request->latitude;
        // $location->longitude   = $request->longitude;
        // $location->storeCode   = $request->storeCode;

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

    public function index()
    {
        $locations = Location::latest()->paginate(10);

        return view('backend.test.index', compact('locations'));
    }


    public function show($id)
    {
        return Location::find($id);
    }

    public function edit(Location $location)
    {
        return view('backend.test.edit', [
            'location' => $location
        ]); 
    }

    public function update(Request $request)
    {
        // print_r($request->all());die;

        $location = Location::find($request->id);

        $fields = ["name","address","virtual_number"];

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