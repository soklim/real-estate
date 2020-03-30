<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
    //
    protected $fillable=[

        'house_type_name',
        'abbreviation',
        'house_type_code',
        'is_deleted'

    ];

}
