<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthday');
            $table->string('password');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('income');
            $table->string('occupation');
            $table->string('family_type');
            $table->string('manglik');

            $table->string('p_income');
            $table->json('p_occupation');
            $table->json('p_family_type');
            $table->string('p_manglik');

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
        Schema::dropIfExists('users');
    }
}
