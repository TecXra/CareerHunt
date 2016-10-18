<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Cinfo;
class CinfoTableseeder extends Seeder
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
        	Cinfo::create([

        		'cinfoes_id' => $user_id,
        		'c_institute'   => $faker->Text(10),
        		'c_year'   => $faker->year($max = 'now'),
        		'c_name'   => $faker->Text(10),
        		
               
        		]);


        }
    }
}
