<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tag');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('berita_tag', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tag')->unsigned();
            $table->bigInteger('id_berita')->unsigned();

            $table->foreign('id_tag')->references('id')->on('tags');
            $table->foreign('id_berita')->references('id')->on('beritas');
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
        Schema::dropIfExists('tags');
        Schema::dropIfExists('berita_tag');
    }
}
