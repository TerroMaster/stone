<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProducts extends Model
{
    use HasFactory;
    protected $fillabel = ['name','sum','amount','stone_products_id',];

}
