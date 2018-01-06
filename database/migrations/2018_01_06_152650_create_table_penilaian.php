<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kandidat_id')->unsigned();
            $table->integer('c1')->comment('Nilai AKademik');
            $table->integer('c2')->comment('Kepemimpinan');
            $table->integer('c3')->comment('Keaktifan');
            $table->integer('c4')->comment('Kedisiplinan');
            $table->integer('c5')->comment('Visi Misi');
            $table->integer('total_nilai')->comment('Total Penilaian')->nullable();
            $table->timestamps();

            $table->foreign('kandidat_id')->references('id')->on('kandidat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
}
