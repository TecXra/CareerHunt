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
      Schema::create('jpinfos', function (Blueprint $table) {
           
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('confirmation_code');
            $table->timestamps();
            
            $table->softDeletes();
        });
        Schema::create('pinfos', function (Blueprint $table) {
             $table->increments('id');
             $table->unsignedInteger('pinfoes_id')->nullable();
            $table->string('image');
            $table->timestamp('age');
            $table->integer('phone');
            $table->string('address');
            $table->text('country');
            $table->text('city');
            $table->text('town');
            $table->text('martial_status');
            $table->string('nationality');
            $table->string('religion');
            $table->timestamps();
            $table->foreign('pinfoes_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

        });

         Schema::create('einfos', function (Blueprint $table) {
             $table->increments('id');
              $table->unsignedInteger('einfoes_id')->nullable();
            $table->string('degree_title');
            $table->string('major_subjects');
            $table->string('institute');
            $table->string('per_age');
            $table->string('e_duration');
            $table->timestamps();
             $table->foreign('einfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');

        });

         Schema::create('jinfos', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('jinfoes_id')->nullable();
            $table->text('job_title');
            $table->text('job_description');
            $table->string('j_duration');
            $table->text('comp_name');
            $table->timestamps();
             $table->foreign('jinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');

        });
         Schema::create('rpinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rpinfoes_id')->nullable();
            $table->text('rp_title');
            $table->text('rp_description');
            $table->string('rp_year');
            $table->string('p_paper');
            $table->timestamps();
            $table->foreign('rpinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');

        });

         Schema::create('vrinfos', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('vrinfoes_id')->nullable();
           $table->text('org');
            $table->text('post');
            $table->string('v_duration');
            $table->timestamps();
            $table->foreign('vrinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');
        });


          Schema::create('seinfos', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('seinfoes_id')->nullable();
            $table->text('s_topic');
            $table->text('s_institute');
            $table->timestamps();
            $table->foreign('seinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');
            });
          Schema::create('awinfos', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('awinfoes_id')->nullable();
            $table->string('a_name');
            $table->string('a_year');
            $table->string('a_institute');
            $table->timestamps();
            $table->foreign('awinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');
            });
          Schema::create('cinfos', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('cinfoes_id')->nullable();
            $table->string('c_name');
            $table->string('c_year');
            $table->string('c_institute');
            $table->timestamps();
            $table->foreign('cinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');
            });
          Schema::create('skinfos', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('skinfoes_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->foreign('skinfoes_id')
                ->references('id')
                ->on('pinfos')
                ->onDelete('set null');
            });
          Schema::create('lang_infos', function (Blueprint $table) {
            $table->increments('id');
           $table->unsignedInteger('langinfoes_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->foreign('langinfoes_id')
                ->references('id')
                ->on('pinfos')
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
        Schema::drop('lang_infos');
        Schema::drop('skinfos');
        Schema::drop('cinfos');
        Schema::drop('awinfos');
        Schema::drop('seinfos');
        Schema::drop('vrinfos');
        Schema::drop('rpinfos');
        Schema::drop('jinfos');
        Schema::drop('einfos');
        Schema::drop('pinfos');
        Schema::drop('pinfos');
    }
}
