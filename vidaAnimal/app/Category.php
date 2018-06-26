<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryController;
class Category extends Model
{
    protected $fillable = [
        'code',
        'name_category'
    ];
}
