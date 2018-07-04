<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enquiry_id')->unsigned();
            $table->foreign('enquiry_id')->references('id')->on('enquiries');
            $table->integer('discount')->default(0);
            $table->integer('advance')->default(0);
            $table->text('book_date');
            $table->integer('trainer_id')->unsigned();
            $table->foreign('trainer_id')->references('id')->on('trainers');
            $table->integer('shift_id')->unsigned();
            $table->foreign('shift_id')->references('id')->on('shifts');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
