<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // mass assignment
    protected $fillable = ['products', 'price', 'description', 'est_time', 'vendor'];
}
