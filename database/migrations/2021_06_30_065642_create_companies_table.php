<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('name');
            $table->string('address');
            $table->string('country_id');
            $table->string('city_id');
            $table->string('zip_code');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile');
            $table->string('website');
            $table->string('no_of_employees');
            $table->string('no_of_branches');
            $table->string('establish_year');
            $table->string('working_hours');
            $table->string('profile');
            $table->string('logo');
            $table->string('more_info');
            $table->string('status');
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
        Schema::dropIfExists('companies');
    }
}
