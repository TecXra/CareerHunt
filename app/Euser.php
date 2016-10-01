<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Euser extends Model
{
    protected $fillable = [


            
           'name',
           'username',
           'email',
            'password',
            'confirmation_code',
            

    ];
 public function Euser_User()
    {
        return $this->belongsTo('App\User');
    }

    public function Euser_Compinfo()
    {
        return $this->hasOne('App\Compinfo');
    }
}
