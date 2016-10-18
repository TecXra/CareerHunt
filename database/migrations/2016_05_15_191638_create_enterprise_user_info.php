<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterpriseUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comp_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('compinfos_id')->nullable();
            $table->text('comp_head_name');
            $table->string('slogan');
            $table->text('head_hr_department');
            $table->text('industry_type');
            $table->string('address');
            $table->text('ownership_type');
            $table->string('number_of_employer');
            $table->integer('since');
            $table->string('company_logo');
            $table->integer('number_of_branches');
            $table->string('comp_website');
            $table->integer('phone');
            $table->string('city');
            $table->string('email');
            $table->timestamps();
            $table->foreign('compinfos_id')
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
        Schema::drop('comp_infos');
    }
}
