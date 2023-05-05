<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentstallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentstall', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('dateofbirth');
            $table->string('address');
            $table->string('contact');
            $table->string('emailadd');
            $table->mediumText('image')->nullable();
            $table->string('stalltype');
            $table->string('stallname');
            $table->string('payment');
            $table->string('amount');
            $table->string('selectedStallTextbox');
            $table->string('totalamount');
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
        Schema::dropIfExists('rentstall');
    }
}
