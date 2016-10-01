<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang_info extends Model
{
    protected $fillable = [


             'name'
    ];
public function Lang_Juser()
    {
        return $this->belongsTo('App\Juser');
    }

}
