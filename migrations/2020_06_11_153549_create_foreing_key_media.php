<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeingKeyMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->increments('id')->change();
        });
        Schema::table('media', function (Blueprint $table) {
            $table->increments('id')->change();
        });
        Schema::table('media_tags', function ($table) {
            $table->foreign('idMedia')->references('id')->on('media');
            $table->foreign('idTag')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media_tags', function($table){
            $table->dropForeign('media_tags_idmedia_foreign');
            $table->dropForeign('media_tags_idtag_foreign');
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
        });
    }
}
