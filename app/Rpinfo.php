<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpinfo extends Model
{
	protected $fillable = [


            'rp_title',
            'rp_description',
            'rp_year',
            'p_paper',
            'rpinfoes_id'

    ];
    
    public function rpinfoPinfo()
    {
        return $this->belongsTo('App\User');
    }
}
