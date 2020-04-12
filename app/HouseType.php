<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
    //
    protected $fillable=[

        'house_type_name_kh',
        'house_type_name_en',
        'abbreviation',
        'house_type_code',
        'is_deleted',
        'desc_kh',
        'desc_en'

    ];

}
