<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTambahKolomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matakuliahs', function (Blueprint $table) {
            $table->text('link_grupdiskusi')->nullable()->after('semester');
            $table->text('password_diskusi')->nullable()->after('link_grupdiskusi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matakuliahs', function (Blueprint $table) {
            //
        });
    }
}
