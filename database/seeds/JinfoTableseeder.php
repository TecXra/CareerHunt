<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Jinfo;
class JinfoTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
$faker=Faker\Factory::create();
                foreach(range(1,8)as $index)
        {
        	
        	$user_id =   Pinfo::orderBy(DB::raw('RAND()'))->first()->id;
           // $hotel_id = Hotel::orderBy(DB::raw('RAND()'))->first()->id;
        	Jinfo::create([

        		'jinfoes_id' => $user_id,
        		'job_title'   => $faker->Text(10),
                'job_description'   => $faker->Text(10),
                'j_duration'   => $faker->Text(10),
                'comp_name'   => $faker->company,
                
        		
               
        		]);


        }

    }
}
