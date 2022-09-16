<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diskusis', function (Blueprint $table) {
            $table->bigInteger('id_kategori')->unsigned()->after('id_user')->nullable();

            $table->foreign('id_kategori')->references('id')->on('matakuliahs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diskusis', function (Blueprint $table) {
            //
        });
    }
}
