<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CompinfoTableseeder::class);
        $this->call(PinfoTableseeder::class);
        $this->call(CinfoTableseeder::class);
        $this->call(JinfoTableseeder::class);
        $this->call(Lang_infoTableseeder::class);
        $this->call(RpinfoTableseeder::class);
        $this->call(SeinfoTableseeder::class);
        $this->call(SkinfoTableseeder::class);
        $this->call(VrinfoTableseeder::class);
        $this->call(EinfoTableseeder::class);
        $this->call(AwinfoTableseeder::class);
        

        Model::reguard();
    }
}
