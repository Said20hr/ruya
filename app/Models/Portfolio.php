<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','title','slug','arabic_title','
        french_title','link','primary_image','additional_images',
        'description','arabic_description','french_description',
        ];
}
