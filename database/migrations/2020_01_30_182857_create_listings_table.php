<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agent_id')->unsigned()->index();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->integer('type')->nullable();
            $table->integer('units')->nullable();
            $table->integer('parkingSpaces')->nullable();
            $table->integer('parkingSpacesPerUnit')->nullable();
            $table->datetime('startDate')->nullable();
            $table->datetime('endDate')->nullable();
            $table->string('address')->nullable();
            $table->text('physicalAddress')->nullable();
            $table->datetime('constructionDate')->nullable();
            $table->datetime('renovationDate')->nullable();
            $table->string('pinLocation')->nullable();
            $table->string('landMark')->nullable();
            $table->string('occupationCertNo')->nullable();
            $table->string('occupationCertImg')->nullable();
            $table->string('plotNo')->nullable();
            $table->string('buildingMaterial')->nullable();
            $table->integer('furnished')->nullable();
            $table->integer('modernFinishing')->nullable();
            $table->double('advertisingCost')->nullable();
            $table->double('discount')->nullable();
            $table->double('payable')->nullable();
            $table->double('received')->nullable();
            $table->double('pending')->nullable();
            $table->string('couponId')->nullable();
            $table->integer('percentageDiscount')->nullable();
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
        Schema::dropIfExists('listings');
    }
}
