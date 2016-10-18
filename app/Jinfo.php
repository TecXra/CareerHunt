<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jinfo extends Model
{
	protected $fillable = [


            'job_title',
            'job_description',
            'j_duration',
            'comp_name',
            'jinfoes_id'

    ];
    
    public function jinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}
