<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Pinfo extends Model
{
    
    protected $fillable = [




            'image',
            'username',
            'email',
            'pinfoes_id',
            'age',
            'phone',
            'address',
            'country',
            'city',
            'town',
            'martial_status',
            'nationality',
            'religion',
            'matric',
            'intermediate',
            'bs_bsc',
            'ms_Msc',
            'other', 
            //previous company detail if an
            'comp1',
            'comp2',
            'comp3', 
            //researce and publication any tw
            'title1',
            'year1',
            'title2',
            'year2', 
            //awards if an
            'award1',
            'award2', 
            //skills if any(major
            'Skill1',
            'Skill2',
            'Skill3',
            //experience
            'exp',
            'about_you'

    ] ;
       public function userpinfo()
    {
        return $this->belongsTo('App\User');
    } 


          
}
