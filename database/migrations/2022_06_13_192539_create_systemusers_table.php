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
        Schema::create('systemusers', function (Blueprint $table) {
            $table->id();
            
            $table->string('name',20);
            $table->string('email',50)->unique();
            $table->string('phone',200)->unique();
            $table->string('subject',200);
            $table->string('message',250);
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
        Schema::dropIfExists('systemusers');
    }
};
