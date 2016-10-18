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

    public function compinfoUser()
    {
        return $this->belongsTo('App\User');
    }
public function compinfoPost()
    {
        return $this->hasOne('App\Compinfo');
    }
    }
