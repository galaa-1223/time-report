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
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->string('position', 200);
            $table->enum('sex', ['male', 'female'])->default('male');
            $table->char('code', 8);
            $table->string('password');
            $table->string('phone', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image', 200)->nullable();
            $table->timestamps();
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
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
