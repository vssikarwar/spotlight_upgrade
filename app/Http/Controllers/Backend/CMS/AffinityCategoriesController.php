<?php

namespace App\Http\Controllers\Backend\CMS;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AffinityCategoriesService;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\Admin\AffinityCategories;



class AffinityCategoriesController extends Controller
{
    public function __construct(AffinityCategoriesService $AffinityCategories)
    {
        $this->AffinityCategories = $AffinityCategories;
    }

    public function index() 
    {  


        $affinityCategories = $this->AffinityCategories->get();

        return view('backend.dashboards.admin.affinityCategories.index', compact('affinityCategories'));

   
    }

    public function add()
    {
        return view('backend.dashboards.admin.affinityCategories.add');
    }

    public function addData(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'googleid' => 'required',
            'parent_id' => 'required'
        ]);

        //echo "<pre>";print_r(request()->all());die;
        $alias = str_replace(' ','-',strtolower(request()->all()['name']));
        AffinityCategories::create
        (
            array_merge
            (
                $request->only('parent_id','googleid','name','status'),
                ['alias' => $alias]
            )
        );
        echo 'Created';die;
    }

    public function import()
    {

    }

    public function export()
    {

        // $fileName = "Affinity-Category_" . date('Y-m-d h-i-s') . ".csv";
        // $affinityCategories = AffinityCategories::all();
        // $columns = array('Parent', 'Google Id', 'Name', 'Alias');

        // $callback = function() use($affinityCategories, $columns)
        // {

        // }


        // $affinityCategories = $this->AffinityCategories->get();

        // $affinityCategories = $affinityCategories->hydrate(false)->toArray();
        // $largeAction=$this->maxFileArrayLength($affinityCategories);
        // $this->exportCsv($affinityCategories,$largeAction);

    }

    public function exportCsv($data,$largeAction)
    {

        // $fields = array('Parent', 'Google Id', 'Name', 'Alias');
        
        // $delimiter = ","; 
        // //for file name 
        // $filename = "Affinity-Category_" . date('Y-m-d h-i-s') . ".csv";
        // // file path for save
        // $f = fopen(WWW_ROOT.'files/'.$filename,'w'); 

      
    }


    public function statusUpdate(AffinityCategories $affinityCategories)
    {
      if($affinityCategories['status'] == 1)
      {
        $status = 0;
      }
      else
      {
        $status = 1;
      }

        // $result = $affinityCategories->update(['status' => $status]);

        AffinityCategories::where('id', $affinityCategories['id'])
        ->update([
            'status' => $status
         ]);


        return redirect()->route('AffinityCategories.index')
            ->withSuccess(__('Post updated successfully.'));



    }

    public function edit(AffinityCategories $affinityCategories) 
    {
        return view('backend.dashboards.admin.affinityCategories.edit', [
            'affinityCategories'=>$affinityCategories
        ]);
    }

    public function update(Request $request, AffinityCategories $affinityCategories)
    {
        $request->validate([
                'name'=>'required',
                'googleid' => 'required',
                'alias' => 'required'
            ]);

        //echo "<pre>";print_r(request()->all());die;
        $alias = str_replace(' ','-',strtolower(request()->all()['name']));
        $result = $affinityCategories->update((array_merge(
            $request->only('name','status'),
            ['alias' => $alias]
        )));
        
        //echo 1;die;
        return redirect()->route('AffinityCategories.index')
            ->withSuccess(__('Post updated successfully.'));
    }

    public function delete(AffinityCategories $affinityCategories) 
    {
        $affinityCategories->delete();
        return redirect()->route('AffinityCategories.index')
        ->withSuccess(__('Affinity Categories deleted successfully.'));
    }

}