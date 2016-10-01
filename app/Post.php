<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [


             'job_title',
            'job_description',
            'job_duration',
            'apply_due',
            'last_date',
            

    ];

public function Post_Compinfo()
    {
        return $this->belongsTo('App\Compinfo');
    }
}
