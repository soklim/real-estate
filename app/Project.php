<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable=[

        'project_name',
        'abbreviation',
        'project_code',
        'is_deleted'

    ];

}
