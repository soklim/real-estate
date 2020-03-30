<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseInfo extends Model
{
    //
    protected $fillable=[

        'block_no',
        'street_no',
        'building_no',
        'house_no',
        'level',
        'label',
        'is_deleted'
    ];

    public function products(){

        return $this->belongsTo('App\Project','project-id');
    }

    public function housetype(){

        return $this->belongsTo('App\HouseType','house_type_id');
    }



}
