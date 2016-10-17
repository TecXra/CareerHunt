<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vrinfo extends Model
{
	protected $fillable = [


            'org',
            'post',
            'v_duration',
            'vrinfoes_id'

    ];
     
     public function vrinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}
