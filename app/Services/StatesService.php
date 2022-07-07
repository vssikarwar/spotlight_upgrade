<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\States;
use App\Repository\StatesRepositoryInterface;



class StatesService
{

    public function __construct(StatesRepositoryInterface $StatesRepositoryInterface)
    {
            $this->StatesRepositoryInterface = $StatesRepositoryInterface;
    }

    public function get() 
    { 
        
        return $this->StatesRepositoryInterface->get();  
         
    } 

    public function add($request)
    {

        $countryName = "";

        $this->StatesRepositoryInterface->saveData($request);

    }

    public function delete($states) 
    {
       $result = $states->delete();

    }

    public function statusUpdate($states)
    {
      if($states['active'] == 1)
      {
        $status = 0;
      }
      else
      {
        $status = 1;
      }

      $this->StatesRepositoryInterface->updateStatus($states, $status);


    }


    public function update($request, $states)
    {
        // echo "<pre>";print_r(request()->all());die;

        $this->StatesRepositoryInterface->update($request, $states);

    }
    
 
} 