<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('cat_id');
            $table->string('title');
            $table->string('short_content');
            $table->longtext('long_content');
            $table->timestamps();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->foreign('cat_id')->references('id')->on('categories');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
