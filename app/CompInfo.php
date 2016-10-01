<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompInfo extends Model
{
	protected $fillable = [

            'compinfos_id',    
            'comp_head_name',
            'slogan',
           'head_hr_department',
            'industry_type',
           'address',
            'ownership_type',
            'number_of_employer',
            'since',
            'company_logo',
            'number_of_branches',
            'comp_website',
            'phone',
            'city',
           'email'


    ];

    public function Compinfo_Euser()
    {
        return $this->belongsTo('App\Euser');
    }
public function Cominfo_Post()
    {
        return $this->hasOne('App\Compinfo');
    }
    }
