<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Awinfo;
class AwinfoTableseeder extends Seeder
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
        	Awinfo::create([

        		'awinfoes_id' => $user_id,
        		
        		'a_name'   => $faker->Text(10),
        		
        		'a_institute'   => $faker->Text(10),
        		
        		'a_year'   => $faker->year($max = 'now')
        		
                
                


        		]);


        }
    }
}
