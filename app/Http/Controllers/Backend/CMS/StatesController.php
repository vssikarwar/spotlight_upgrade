<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\StatesService;
use App\Models\States;

class StatesController extends Controller
{
    public function __construct(StatesService $States)
    {
        $this->StatesServices = $States;
    }

    public function index()
    {  


        $states = $this->StatesServices->get();
    
        return view('backend.dashboards.admin.states.index', compact('states'));
       
    }

    public function add()
    {
        return view('backend.dashboards.admin.states.add');
    }

    public function addData(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:55|unique:states,name',
            'state_code' => 'required|max:2|unique:states,state_code',
            'country_id'=> 'required|unique:states,state_code',
            'alias'=>'required',
        ]);

        $states = $this->StatesServices->add($request);


        return redirect()->route('States.index')
        ->withSuccess(__('State created successfully.'));
    }

    public function deleteData(States $states) 
    {
        $this->StatesServices->delete($states);

        return redirect()->route('States.index')
        ->withSuccess(__('State deleted successfully.'));
    }

    public function edit(States $states)  
    {
        return view('backend.dashboards.admin.states.edit', [
            'states'=>$states
        ]);
    }

    public function editData(Request $request, States $states)
    { 
        
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|unique:states,name,'.$states->id,
        ]);
        

        $this->StatesServices->update($request, $states);
        
        return redirect()->route('States.index')
            ->withSuccess(__('Post updated successfully.'));

    }

    public function statusUpdate(States $states)
    {

        $this->StatesServices->statusUpdate($states);

        return redirect()->route('States.index')
             ->withSuccess(__('Post updated successfully.'));

    }

}
