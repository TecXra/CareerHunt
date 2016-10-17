<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seinfo extends Model
{
	protected $fillable = [


            's_topic',
      's_institute',
      'seinfoes_id'

    ];
     public function seinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}
