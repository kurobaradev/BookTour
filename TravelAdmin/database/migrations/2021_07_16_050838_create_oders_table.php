<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("user_id");
            $table->string("user_name");
            $table->string("user_mail");
            $table->dateTime('departed');
            $table->integer('duration');
            $table->string("tour_name");
            $table->string("tour_id");
            $table->string("Nguoilon");
            $table->string("treem");
            $table->string("price_car");
            $table->string("price");
            $table->string("phone");
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
        Schema::dropIfExists('oders');
    }
}
