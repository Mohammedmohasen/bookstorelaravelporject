<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\admin\author;
use App\Models\admin\Categorie;
use App\Models\admin\PublishingHouse;
class books extends Model
{
    use HasFactory;
    use SoftDeletes;
       protected $fillable = ['name', 'isbn', 'releaseYear','authorId','categoriesId','publishingHousesId'];
       protected $dates = [ 'deleted_at' ];
       public $timestamps = true;

       public function author()
    {
        return $this->belongsTo(author::class,'authorId');
    }
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class,'categoriesId');
    }
    public function PublishingHouse()
    {
        return $this->belongsTo(PublishingHouse::class,'publishingHousesId');
    }
}
