<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('groom_name');
            $table->string('bride_name');
            $table->string('user_id');
            $table->string('thumbnail');
            $table->string('designation')->nullable();
            $table->json('equipments')->nullable();
            $table->json('lenses')->nullable();
            $table->string('hours')->nullable();
            $table->string('days')->nullable();
            $table->string('days_rate')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('attendees')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
