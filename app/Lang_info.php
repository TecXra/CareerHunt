<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang_info extends Model
{
    protected $fillable = [


             'name',
             'langinfoes_id'
    ];
public function langPinfo()
    {
        return $this->belongsTo('App\User');
    }

}
