<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostandfoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lostandfound', function (Blueprint $table) {
            $table->id();
            $table->string('itemname');
            $table->string('dateoflost');
            $table->string('description');
            $table->mediumText('image')->nullable();
            $table->string('status')->default("Lost");
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
        Schema::dropIfExists('lostandfound');
    }
}
