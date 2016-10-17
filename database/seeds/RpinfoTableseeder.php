<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Rpinfo;
class RpinfoTableseeder extends Seeder
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
        	
        	 $user_id =  Pinfo::orderBy(DB::raw('RAND()'))->first()->id;
           // $hotel_id = Hotel::orderBy(DB::raw('RAND()'))->first()->id;
        	Rpinfo::create([

        		'rpinfoes_id'=> $user_id,
        		'rp_title'   => $faker->Text(10),
                'rp_description'   => $faker->Text(20),
                'rp_year'   => $faker->Text(20),
                'p_paper'   => $faker->Text(20)
        		
               
        		]);


        }
    }
}
