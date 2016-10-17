<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Einfo;
class EinfoTableseeder extends Seeder
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
        	Einfo::create([

        		'einfoes_id' => $user_id,
        		'degree_title'   => $faker->Text(10),
                'major_subjects'   => $faker->Text(10),
                'major_subjects'   => $faker->Text(10),
                'per_age'   => $faker->Text(10),
                'e_duration'   => $faker->Text(10)
        		
               
        		]);


        }


    }
}
