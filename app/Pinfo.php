<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinfo extends Model
{
    
    protected $fillable = [


            'image',
            'age',
            'phone',
            'address',
            'country',
            'city',
            'town',
            'martial_status',
            'nationality',
            'religion'

    ];
      
      public function Pinfo_Juser()
    {
        return $this->belongsTo('App\Juser');
    }       
}
