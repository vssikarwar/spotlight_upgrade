<?php

namespace App\Models\Backend\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AffinityCategories extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id','googleid','name','alias'];

    protected $table = 'affinity_categories';

    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'modified';

    protected $primaryKey = 'id';
}
