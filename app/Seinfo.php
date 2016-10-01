<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seinfo extends Model
{
	protected $fillable = [


            's_topic',
      's_institute'

    ];
     public function Seinfo_Juser()
    {
        return $this->belongsTo('App\Juser');
    }
}
