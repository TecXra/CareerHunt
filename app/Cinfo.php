<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinfo extends Model
{
	protected $fillable = [


            'c_name',
            'c_year',
            'c_institute',
            'cinfoes_id'

    ];
    public function cinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}