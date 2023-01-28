<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('jobtitle');
            $table->string('company');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('formattedLocation');
            $table->string('date');
            $table->longText('snippet');
            $table->string('url');
            $table->boolean('sponsored');
            $table->boolean('expired');         
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
        Schema::dropIfExists('jobs');
    }
};