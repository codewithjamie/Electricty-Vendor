<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLoggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_loggers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->unsignedBigInteger('userid', 0,1)->nullable();
            $table->timestamp('login_time')->nullable();
            $table->ipAddress('login_ip')->nullable();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_loggers');
    }
}
