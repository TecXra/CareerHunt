<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skinfo extends Model
{
	protected $fillable = [


             'name'

    ];
   
   public function Skinfo_Juser()
    {
        return $this->belongsTo('App\Juser');
    }
}
