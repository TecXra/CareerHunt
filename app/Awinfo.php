<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awinfo extends Model
{
	protected $fillable = [


           'a_name',
            'a_year',
            'a_institute'
    ];
    public function Juser()
    {
        return $this->belongsTo('App\Juser');
    }
}
