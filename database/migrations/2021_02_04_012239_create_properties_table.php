<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->uuid('uuid');
            $table->text('description');
            $table->integer('price');
            $table->integer('bed')->nullable();
            $table->integer('bath')->nullable();
            $table->integer('sqft')->nullable();
            $table->integer('garage')->nullable();
            $table->string('floor_plan_pdf_url')->nullable();
            $table->string('protected_password')->nullable();
            $table->string('street1');
            $table->string('street2')->nullable();
            $table->string('city');
            $table->string('state', 2);
            $table->integer('zip');
            $table->string('country', 2)->default('US');
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
        Schema::dropIfExists('properties');
    }
}
