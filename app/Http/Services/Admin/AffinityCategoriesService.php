<?php
namespace App\Http\Services\Admin;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;

class AffinityCategoriesService
{

    public function get()
    { 
        return AffinityCategories::latest()->paginate(20);
    }

}