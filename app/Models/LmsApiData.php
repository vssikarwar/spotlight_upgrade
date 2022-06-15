<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LmsApiData extends Model
{
    use HasFactory;

    protected $table = 'lms_api_data';

    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'modified';

    protected $primaryKey = 'id';
}
