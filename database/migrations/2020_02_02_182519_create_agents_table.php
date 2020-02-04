<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('agency')->nullable();
            $table->string('primaryEmail')->nullable();
            $table->string('secondaryEmail')->nullable();
            $table->integer('primaryPhone')->nullable();
            $table->integer('secondaryPhone')->nullable();
            $table->string('agencyAddress')->nullable();
            $table->integer('agencyPhone')->nullable();
            $table->string('workEmail')->nullable();
            $table->string('agencyLicence')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
