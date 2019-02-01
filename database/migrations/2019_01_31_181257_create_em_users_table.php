<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('em_users', function (Blueprint $table) {
            $table->increments('id');
            $table->date('profile_creation');
            $table->string('lang');
            $table->integer('age');
            $table->boolean('gender');
            $table->float('wieght_init');
            $table->float('wieght_actual');
            $table->float('wieght_target');
            $table->boolean('pic_exist');
            $table->integer('motivation_degree');
            $table->boolean('sex_match');
            $table->integer('diet_method_code');
            $table->double('latitude');
            $table->float('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('em_users');
    }
}
