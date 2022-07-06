<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccessToken extends Model
{
    use HasFactory;

    protected $table = 'user_access_tokens';

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    
    protected $guarded=[];


    protected $primaryKey = 'id';
}
