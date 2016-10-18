<?php

use Illuminate\Database\Seeder;
use App\Compinfo;
use App\User;
class CompinfoTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    
        $faker=Faker\Factory::create();

       // City::truncate();
        foreach(range(1,8)as $index)
        {
        	
        	 $user_id = User::orderBy(DB::raw('RAND()'))->first()->id;
           // $hotel_id = Hotel::orderBy(DB::raw('RAND()'))->first()->id;
        	Compinfo::create([

        		'compinfos_id' => $user_id,
        		'comp_head_name'   => $faker->company,
        		'slogan'   => $faker->Text(10),
        		'head_hr_department'   => $faker->catchPhrase,
        		'industry_type'   => $faker->catchPhrase,
        		'address'   => $faker->address,
        		'ownership_type'   => $faker->Text(10),
        		'number_of_employer'   => $faker->randomNumber  ,
        		'since'   => $faker->year($max = 'now'),
        		'company_logo'   => $faker->text(10),
        		'number_of_branches'   => $faker->randomNumber,
        		'comp_website'   => $faker->Text(10),
        		'phone'   => $faker->phoneNumber,
        		'city'   => $faker->city,
        		'email'   => $faker->email
                
                


        		]);


        }
    
    }
}
