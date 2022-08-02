<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            // $table->id();
            $table->string('nip')->primary();
            // $table->unsignedBigInteger('id_user')->nullable();
            $table->string('nama');
            $table->enum('jeniskelamin',['Laki-laki','Perempuan']);
            $table->string('foto')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('dosens');
    }
}
