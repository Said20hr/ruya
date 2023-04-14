<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;


class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','title','slug','arabic_title','
        french_title','link','primary_image','additional_images',
        'description','arabic_description','french_description',
        'excerpt','arabic_excerpt','french_excerpt'
    ];

    public function getNameAttribute()
    {
        $locale = config('app.locale');
        return match ($locale) {
            'ar' => $this->arabic_title ?? $this->title,
            'fr' => $this->french_title ?? $this->title,
            default => $this->title,
        };
    }
    public function getExcerptoAttribute()
    {
        $locale = config('app.locale');
        return match ($locale) {
            'ar' => $this->arabic_excerpt ?? $this->excerpt,
            'fr' => $this->french_excerpt ?? $this->excerpt,
            default => $this->excerpt,
        };
    }
    public function category()
    {
        return $this->belongsTo(Service::class);
    }



}
