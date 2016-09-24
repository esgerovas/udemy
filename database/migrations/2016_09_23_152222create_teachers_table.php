<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name',30);
            $table->string('surname',30);
            $table->integer('age',3);
            $table->string('job',50);
            $table->text('biography');
            $table->string('email',50)->unique();
            $table->string('facebook_link',100)->nullable();
            $table->string('linked_link',100)->nullable();
            $table->string('twitter_link',100)->nullable();
            $table->string('youtube_link',100)->nullable();
            $table->string('website_link',100)->nullable();
            $table->string('image',50);
            $table->string('password',50);
            $table->string('number',20)->unique();
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
        Schema::drop('teachers');
    }
}
