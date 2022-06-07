<?php

namespace App\Models\Backend\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffinityCategories extends Model
{
    use HasFactory;

    protected $table = 'affinity_categories';

    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'modified';

    protected $primaryKey = 'id';
}
