<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'modified';

    protected $primaryKey = 'id';
}