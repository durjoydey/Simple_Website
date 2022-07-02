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
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('email',500);
            $table->string('phone',1000);
            $table->string('uni',1000);
            $table->string('exp',1000);    
            $table->string('int_area',30);
            $table->string('not_period',30);
            $table->string('cur_sal',500);
            $table->string('exp_sal',1000);
            $table->string('cov_let',1000);
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
        Schema::dropIfExists('applies');
    }
};
