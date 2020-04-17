<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->text('first_name');
            $table->text('last_name');
            $table->text('email');
            $table->text('phone');
            $table->text('web_site')->nullable();
            $table->text('date_of_birth');
            $table->text('street_address');
            $table->text('address_line_2')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('postal')->nullable();
            $table->text('country');
            $table->text('sex');
            $table->longText('bio')->nullable();
            $table->longText('divisions_of_internet')->nullable();
            $table->text('salary');
            $table->text('latest_degree');
            $table->text('experience');
            $table->text('designation')->nullable();
            $table->text('cv')->nullable();
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
        Schema::dropIfExists('job_applications');
    }
}
