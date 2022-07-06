<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

        protected $table = 'cities';

        const UPDATED_AT = null;
        const CREATED_AT = null;

        protected $guarded=[];


        protected $primaryKey = 'id';
}
