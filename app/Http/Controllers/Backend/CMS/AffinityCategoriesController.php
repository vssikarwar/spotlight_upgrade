<?php

namespace App\Http\Controllers\Backend\CMS;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AffinityCategoriesService;
use App\Models\Backend\Admin\AffinityCategories;



class AffinityCategoriesController extends Controller
{
    public function __construct(AffinityCategoriesService $AffinityCategories)
    {
        $this->AffinityCategoriesService = $AffinityCategories;
    }

    public function index() 
    {  


        $affinityCategories = $this->AffinityCategoriesService->get();

        return view('backend.dashboards.admin.affinityCategories.index', compact('affinityCategories'));

   
    }

    public function add()
    {
        return view('backend.dashboards.admin.affinityCategories.add');
    }

    public function addData(Request $request)
    {
<<<<<<< HEAD
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
=======

        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:55',
            'googleid' => 'required',
            'parent_id'=> 'required',
        ]);
        


        $this->AffinityCategoriesService->add($request);


        return redirect()->route('AffinityCategories.index')
        ->withSuccess(__('Affinity Categories created successfully.'));

>>>>>>> 17edd6645dc588f7a0968842e0181d1fed72b499
    }

    public function import()
    {

    }

    public function export()
    {
<<<<<<< HEAD

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
=======
        $fileName = "Affinity-Category_" . date('Y-m-d h-i-s') . ".csv";
        $affinityCategories = AffinityCategories::all();

        $columns = array('Parent', 'Google Id', 'Name', 'Alias');
>>>>>>> 17edd6645dc588f7a0968842e0181d1fed72b499

        $callback = function() use($affinityCategories, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($affinityCategories as $affinityCategory)
            {
                $row['name']  = $affinityCategory->name;
            
                fputcsv($file, array($row['name']));
            }

<<<<<<< HEAD
        // $fields = array('Parent', 'Google Id', 'Name', 'Alias');
        
        // $delimiter = ","; 
        // //for file name 
        // $filename = "Affinity-Category_" . date('Y-m-d h-i-s') . ".csv";
        // // file path for save
        // $f = fopen(WWW_ROOT.'files/'.$filename,'w'); 

      
    }
=======
            fclose($file);
        };
>>>>>>> 17edd6645dc588f7a0968842e0181d1fed72b499

        return response()->stream($callback, 200);


        // $affinityCategories = $this->AffinityCategories->get();

        // $affinityCategories = $affinityCategories->hydrate(false)->toArray();
        // $largeAction=$this->maxFileArrayLength($affinityCategories);
        // $this->exportCsv($affinityCategories,$largeAction);

    }


    public function statusUpdate(AffinityCategories $affinityCategories)
    {

        $this->AffinityCategoriesService->statusUpdate($affinityCategories);

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
<<<<<<< HEAD
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
=======
    { 
        
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255',
        ]);
        

        $this->AffinityCategoriesService->update($request, $affinityCategories);
>>>>>>> 17edd6645dc588f7a0968842e0181d1fed72b499
        
        return redirect()->route('AffinityCategories.index')
            ->withSuccess(__('Post updated successfully.'));

    }

    public function delete(AffinityCategories $affinityCategories) 
    {
        $this->AffinityCategoriesService->delete($affinityCategories);

        return redirect()->route('AffinityCategories.index')
        ->withSuccess(__('Affinity Categories deleted successfully.'));
    }



}