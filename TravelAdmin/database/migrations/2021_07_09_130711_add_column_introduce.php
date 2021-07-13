<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIntroduce extends Migration
{
    public function up()
    {
        Schema::table('introduces', function (Blueprint $table) {
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
        Schema::table('introduces', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
