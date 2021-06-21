<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
       protected $fillable = ['name', 'email', 'mobile'];  
       protected $dates = [ 'deleted_at' ];
}
