<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\admin\books;
class author extends Model
{
    use HasFactory;
       use SoftDeletes;
       protected $fillable = ['name', 'email', 'mobile'];
       protected $dates = [ 'deleted_at' ];
       public $timestamps = true;

      public function books()
    {
        return $this->hasMany(books::class);
    }


}
