<?php

use Illuminate\Database\Seeder;
use App\Pinfo;
use App\Lang_info;
class Lang_infoTableseeder extends Seeder
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
        	Lang_info::create([

        		'langinfoes_id' => $user_id,
        		'name'   => $faker->Text(10)
        		
               
        		]);


        }
    }
}
