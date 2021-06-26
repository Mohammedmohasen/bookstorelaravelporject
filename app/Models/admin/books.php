<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class books extends Model
{
    use HasFactory;
    use SoftDeletes;
       protected $fillable = ['name', 'email', 'mobile'];
       protected $dates = [ 'deleted_at' ];
       public $timestamps = true;

       public function author()
    {
        return $this->belongsTo('App\Models\admin\author');
    }
    public function Categorie()
    {
        return $this->belongsTo('App\Models\admin\Categorie');
    }
    public function PublishingHouse()
    {
        return $this->belongsTo('App\Models\admin\PublishingHouse');
    }
}
