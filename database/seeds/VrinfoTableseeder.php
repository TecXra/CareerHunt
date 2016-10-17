<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Vrinfo;
class VrinfoTableseeder extends Seeder
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

        	
        	
        	 $user_id = Pinfo::orderBy(DB::raw('RAND()'))->first()->id;
           // $hotel_id = Hotel::orderBy(DB::raw('RAND()'))->first()->id;
        	Vrinfo::create([

        		'vrinfoes_id' => $user_id,
        		'v_duration'   => $faker->Text(10),
        		'post'   => $faker->Text(10),
        		'org'   => $faker->Text(10)
        		
               
        		]);


        }
    }
}
