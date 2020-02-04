<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->integer('phoneNumber1')->nullable();
            $table->integer('phoneNumber2')->nullable();
            $table->string('email')->nullable();
            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            $table->text('description')->nullable();
            $table->string('companyPin')->nullable();
            $table->string('companyPinImage')->nullable();
            $table->string('logo')->nullable();
            $table->string('industry')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('branchName')->nullable();
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
        Schema::dropIfExists('organisations');
    }
}
