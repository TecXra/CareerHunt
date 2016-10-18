<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinfo extends Model
{
    
    protected $fillable = [



            'image',
            'pinfoes_id',
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
      
      public function userpinfo()
    {
        return $this->belongsTo('App\User');
    } 


    public function pinfoJinfo()
    {
        return $this->hasMany('App\Jinfo');
    }

    public function pinfoAwinfo()
    {
        return $this->hasMany('App\Awinfo');
    }

    public function pinfoVrinfo()
    {
        return $this->hasOne('App\Vrinfo');
    }

    public function pinfoLanginfo()
    {
        return $this->hasMany('App\Langinfo');
    }

    public function pinfoCinfo()
    {
        return $this->hasMany('App\Cinfo');
    }

    public function pinfoSeinfo()
    {
        return $this->hasOne('App\Seinfo');
    }

    public function pinfoRpinfo()
    {
        return $this->hasOne('App\Rpinfo');
    }      
}
