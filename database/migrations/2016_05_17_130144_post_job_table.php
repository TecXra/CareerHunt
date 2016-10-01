<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('posts_id')->nullable();
            $table->text('job_title');
            $table->string('job_description');
            $table->string('job_duration');
            $table->string('apply_due');
            $table->string('last_date');
            $table->timestamps();
            $table->foreign('posts_id')
                ->references('id')
                ->on('comp_infos')
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
        Schema::drop('posts');
    }
}
