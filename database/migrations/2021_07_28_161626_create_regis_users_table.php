<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('competition_id');
            $table->foreignId('payment_id')->nullable();
            $table->string('no_registrasi',100)->default('-');
            $table->string('nama_lengkap',100);
            $table->string('nim_nis_nik',50)->nullable();
            $table->string('foto_ktm_ks_ktp',150)->nullable();
            $table->string('jurusan',100)->nullable();
            $table->string('jenis_kelamin',30);
            $table->string('no_hp',20);
            $table->string('line_telegram',100);
            $table->text('alamat');
            $table->string('provinsi',100);
            $table->string('instansi',100)->nullable();
            $table->string('status_pembayaran',50)->default('belum bayar');
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
        Schema::dropIfExists('regis_users');
    }
}
