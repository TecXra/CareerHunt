<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juser extends Model
{


	 protected $fillable = [


            
           'name',
           'username',
           'email',
            'password',
            'confirmation_code',
            
    ];    

     public function Juser_User()
    {
        return $this->belongsTo('App\User');
    }

    public function Juser_Pinfo()
    {
        return $this->hasOne('App\Pinfo');
    }

    public function Juser_Jinfo()
    {
        return $this->hasOne('App\Jinfo');
    }

    public function Juser_Awinfo()
    {
        return $this->hasMany('App\Awinfo');
    }

    public function Juser_Vrinfo()
    {
        return $this->hasOne('App\Vrinfo');
    }

    public function Juser_Langinfo()
    {
        return $this->hasMany('App\Langinfo');
    }

    public function Juser_Cinfo()
    {
        return $this->hasMany('App\Cinfo');
    }

    public function Juser_Seinfo()
    {
        return $this->hasOne('App\Seinfo');
    }

    public function Juser_Rpinfo()
    {
        return $this->hasOne('App\Rpinfo');
    }
}
