<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\books;
class PublishingHouse extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(books::class);
    }



}
