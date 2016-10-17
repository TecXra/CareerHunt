<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skinfo extends Model
{
	protected $fillable = [

          'skinfoes_id',
             'name'

    ];
   
   public function skinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}
