<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Pinfo; 
class PinfoTableseeder extends Seeder
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
        	
        	$user_id =   User::orderBy(DB::raw('RAND()'))->first()->id;
           // $hotel_id = Hotel::orderBy(DB::raw('RAND()'))->first()->id;
        	Pinfo::create([

        		'pinfoes_id' => $user_id,
        		'image'   => $faker->text(10),
        		'martial_status'   => $faker->Text(10),
        		'address'   => $faker->address,
        		'town'   => $faker->Text(10),
        		'nationality'   => $faker->Text(10),
        		'age'   => $faker->randomNumber,
        		'religion'  => $faker->Text(10),
        		'country'   => $faker->country,
        		'phone'   => $faker->phoneNumber,
        		'city'   => $faker->city
        		
                
                


        		]);


        }
    }
}
