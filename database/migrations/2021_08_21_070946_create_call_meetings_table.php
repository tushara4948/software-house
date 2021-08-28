<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('email', 200);
            $table->string('cellnumber', 15);
            $table->text('logo');
            $table->text('note')->nullable();
            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('call_meetings');
    }
}
