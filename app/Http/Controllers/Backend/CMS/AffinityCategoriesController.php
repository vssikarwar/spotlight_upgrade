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

        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:55',
            'googleid' => 'required',
            'parent_id'=> 'required',
        ]);
        


        $this->AffinityCategoriesService->add($request);


        return redirect()->route('AffinityCategories.index')
        ->withSuccess(__('Post created successfully.'));

    }

    public function import()
    {

    }

    public function export()
    {
        $fileName = "Affinity-Category_" . date('Y-m-d h-i-s') . ".csv";
        $affinityCategories = AffinityCategories::all();

        $columns = array('Parent', 'Google Id', 'Name', 'Alias');

        $callback = function() use($affinityCategories, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($affinityCategories as $affinityCategory)
            {
                $row['name']  = $affinityCategory->name;
            
                fputcsv($file, array($row['name']));
            }

            fclose($file);
        };

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
    { 
        
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255',
        ]);
        

        $this->AffinityCategoriesService->update($request, $affinityCategories);
        
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