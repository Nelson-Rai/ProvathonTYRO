<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->string('address');
            $table->string('phone');
            $table->string('cv');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->constrained()
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('grade_id')
                ->constrained()
                ->references('id')
                ->on('grades')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
