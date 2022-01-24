<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMediaDimension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table ('imag_media', function (Blueprint $table) {
            $table->float ('size')->after ('type')->default ('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table ('imag_media', function (Blueprint $table) {
            $table->dropColumn ('size');
        });
    }
}
