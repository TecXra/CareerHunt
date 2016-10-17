<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awinfo extends Model
{
	protected $fillable = [


           'a_name',
            'a_year',
            'a_institute',
            'awinfoes_id'
    ];
    public function awinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}
