<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->bigIncrements('landlordId');
            $table->string('plotNumber');
            $table->integer('rent');
            $table->string('insurance');
            $table->string('parking');
            $table->integer('lateFees');
            $table->integer('condoFees');
            $table->string('dateCreated');
            $table->string('dateModified');
            $table->integer('rentdeposit');
            $table->string('water');
            $table->string('electricity');
            $table->string('wifi');
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
        Schema::dropIfExists('landlords');
    }
}
