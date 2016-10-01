<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jinfo extends Model
{
	protected $fillable = [


            'job_title',
            'job_description',
            'j_duration',
            'comp_name'

    ];
    
    public function Jinfo_Juser()
    {
        return $this->belongsTo('App\Juser');
    }
}
