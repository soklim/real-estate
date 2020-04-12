<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable=[

        'project_name_kh',
        'project_name_en',
        'abbreviation',
        'project_code',
        'is_deleted',
        'desc_kh',
        'desc_en',
        'image_id'

    ];

}
