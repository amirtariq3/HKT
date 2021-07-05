<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('company');
            $table->string('designation');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('image');
            $table->string('password');
            $table->string('skype');
            $table->string('whatsupp');
            $table->string('viber');
            $table->string('gtalk');
            $table->string('line');
            $table->string('other');
            $table->string('membership_type_id');
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
        Schema::dropIfExists('members');
    }
}
