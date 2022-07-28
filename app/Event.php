<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /* Array dos items do checkbox vindo do form*/
    protected $casts = [
        'items' => 'array'
    ];
    /*Insercao de data na BD*/
    protected $dates = ['date'];
}
