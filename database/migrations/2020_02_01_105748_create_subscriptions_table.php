<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('type')->nullable();
          $table->double('cost')->nullable();
          $table->double('discount')->nullable();
          $table->double('payable')->nullable();
          $table->double('received')->nullable();
          $table->double('pending')->nullable();
          $table->string('coupon')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
