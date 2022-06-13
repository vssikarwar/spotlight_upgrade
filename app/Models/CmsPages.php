<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsPages extends Model
{
    use HasFactory;

    protected $table = 'cms_pages';

    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'modified';

    protected $primaryKey = 'id';

}
