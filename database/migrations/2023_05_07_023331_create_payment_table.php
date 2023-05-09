<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('stallnumber');
            $table->string('email');
            $table->string('contact');
            $table->string('type');
            $table->string('amount');
            $table->string('datefrom');
            $table->string('dateto');
            $table->string('payment');
            $table->mediumText('image')->nullable();
            $table->string('refnumber');
            $table->string('status');
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
        Schema::dropIfExists('payment');
    }
}
