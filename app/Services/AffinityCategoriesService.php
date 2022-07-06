<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;
use App\Repository\AffinityCategoriesRepositoryInterface;
 

class AffinityCategoriesService 
{

    public function __construct(AffinityCategoriesRepositoryInterface $AffinityCategoriesRepositoryInterface)
    {
            $this->ACRepositoryInterface = $AffinityCategoriesRepositoryInterface;
    }

 

    public function get() 
    { 

        $result = AffinityCategories::rightJoin('affinity_categories as p', 'affinity_categories.id', '=', 'p.parent_id')
        ->select('p.id', 'affinity_categories.googleid', 'p.name', 'p.alias', 'p.status', 'affinity_categories.name as parent')
        ->paginate(15);

        // $this->ACRepositoryInterface->get();

        return $result;
    
    } 
    
    public function add($request): void 
    {
        $alias = str_replace(' ','-',strtolower(request()->all()['name']));

        $this->ACRepositoryInterface->saveData($request, $alias);

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

      $this->ACRepositoryInterface->updateStatus($affinityCategories, $status);


    }

    public function delete($affinityCategories) 
    {
       $result = $affinityCategories->delete();

    }

    public function update($request, $affinityCategories)
    {
        //echo "<pre>";print_r(request()->all());die;
        $alias = str_replace(' ','-',strtolower(request()->all()['name']));

        $this->ACRepositoryInterface->update($request, $affinityCategories, $alias);

    }

} 