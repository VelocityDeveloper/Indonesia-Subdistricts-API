<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subdistricts extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subdistrict_id','province_id','province','city_id','city','type','subdistrict_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}