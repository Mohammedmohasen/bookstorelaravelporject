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

       public function authorrelation()
    {
        return $this->belongsTo(author::class);
    }
    public function Categorierelation()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function PublishingHouserelation()
    {
        return $this->belongsTo(PublishingHouse::class);
    }
}
