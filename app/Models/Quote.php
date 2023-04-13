<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Quote extends Model
{

    use HasFactory;

    protected $fillable = ['name','service_id','email','phone','project','company','source','budget','additional','currency',    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
