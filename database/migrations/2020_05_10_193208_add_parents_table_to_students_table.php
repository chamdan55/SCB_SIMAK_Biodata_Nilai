<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParentsTableToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->string('tanggal_lahir_ayah');
            $table->string('pekerjaan_ayah');
            $table->longText('alamat_ayah');

            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->string('pekerjaan_ibu');
            $table->longText('alamat_ibu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('nama_ayah');
            $table->dropColumn('tempat_lahir_ayah');
            $table->dropColumn('tanggal_lahir_ayah');
            $table->dropColumn('pekerjaan_ayah');
            $table->dropColumn('alamat_ayah');

            $table->dropColumn('nama_ibu');
            $table->dropColumn('tempat_lahir_ibu');
            $table->dropColumn('tanggal_lahir_ibu');
            $table->dropColumn('pekerjaan_ibu');
            $table->dropColumn('alamat_ibu');
        });
    }
}
