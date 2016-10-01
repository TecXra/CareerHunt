<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vrinfo extends Model
{
	protected $fillable = [


            'org',
            'post',
            'v_duration'

    ];
     
     public function Vrinfo_Juser()
    {
        return $this->belongsTo('App\Juser');
    }
}
