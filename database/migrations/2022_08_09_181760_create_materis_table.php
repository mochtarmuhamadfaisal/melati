<?php

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_matakuliah')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->integer('semester');
            $table->string('kelas');
            $table->string('link_video');
            $table->string('judul_video');
            $table->string('deskripsi_video');
            $table->string('upload_modul');
            $table->string('upload_soal');
            $table->timestamps();

            $table->foreign('id_matakuliah')->references('id')->on('matakuliahs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materis');
    }
}
