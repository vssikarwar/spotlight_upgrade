<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\TimeZones;
use App\Repository\TimeZonesRepositoryInterface;


class TimeZonesService
{

    public function __construct(TimeZonesRepositoryInterface $TimeZonesRepositoryInterface)
    {
            $this->TimeZonesRepositoryInterface = $TimeZonesRepositoryInterface;
    }
 

    public function get() 
    { 
        
        return $this->TimeZonesRepositoryInterface->get();
    
        
    } 

    public function add($request)
    {

        $countryName = "";

        $this->TimeZonesInterface->saveData($request);

    }

    public function delete($timeZones)
    {
       $result = $timeZones->delete();

    }

    public function statusUpdate($timeZones)
    {
      if($timeZones['status'] == 1)
      {
        $status = 0;
      }
      else
      {
        $status = 1;
      }

      $this->TimeZonesRepositoryInterface->updateStatus($timeZones, $status);


    }


    public function update($request, $states)
    {
        // echo "<pre>";print_r(request()->all());die;

        $this->TimeZonesRepositoryInterface->update($request, $states);

    }
    
 
}  