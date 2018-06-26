<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nrp');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('jenis_kelamin');
            $table->string('nomor_hp');
            $table->string('departemen');
            $table->string('fakultas');
            $table->string('jabatan');
            $table->string('alamat');
            $table->integer('status')->default('0');
            $table->integer('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
