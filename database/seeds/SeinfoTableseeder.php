<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Seinfo; 
class SeinfoTableseeder extends Seeder
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
        	Seinfo::create([

        		'seinfoes_id' => $user_id,
        		's_topic'   => $faker->Text(10),
                's_institute'   => $faker->Text(10)
        		
               
        		]);


        }
    }
}
