<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Einfo extends Model
{
	protected $fillable = [


            'degree_title',
            'major_subjects',
            'institute',
            'per_age',
            'e_duration',
            'einfoes_id'

    ];
    public function einfoUser()
    {
        return $this->belongsTo('App\User');
    }
}
