<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{

    use HasFactory;
    public $translatable = ['name'];
    protected $fillable = ['name','slug','arabic_name','french_name'];
}
