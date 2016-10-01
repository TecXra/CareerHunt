<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinfo extends Model
{
	protected $fillable = [


            'c_name',
            'c_year',
            'c_institute'

    ];
    public function Cinfo_Juser()
    {
        return $this->belongsTo('App\Juser');
    }
}