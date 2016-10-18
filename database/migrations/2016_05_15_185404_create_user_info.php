<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('pinfos', function (Blueprint $table) {
             $table->increments('id');
             $table->unsignedInteger('pinfoes_id')->nullable();
             $table->string('username');
             $table->string('email');
            $table->string('image');
            $table->date('age');
            $table->integer('phone');
            $table->string('address');
            $table->text('country');
            $table->text('city');
            $table->text('town');
            $table->text('martial_status');
            $table->string('nationality');
            $table->string('religion');
            //education detail
            $table->string('matric');
            $table->string('intermediate');
            $table->string('bs_bsc');
            $table->string('ms_Msc');
            $table->string('other');
            //previous company detail if any
            $table->string('comp1');
            $table->string('comp2');
            $table->string('comp3');
            //researce and publication any two
            $table->string('title1');
            $table->string('year1');
            $table->string('title2');
            $table->string('year2');
            //awards if any
            $table->string('award1');
            $table->string('award2');
            //skills if any(major)
            $table->string('Skill1');
            $table->string('Skill2');
            $table->string('Skill3');
            //experience
            $table->string('Skill3');
            //about you
            $table->string('about_you');

            $table->timestamps();
            $table->foreign('pinfoes_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('pinfos');
    }
}
