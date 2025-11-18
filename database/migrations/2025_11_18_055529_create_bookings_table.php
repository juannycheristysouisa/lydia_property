<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->string('nama_lengkap');
    $table->string('nik', 16);
    $table->text('alamat');
    $table->date('checkin');
    $table->date('checkout');
    $table->integer('dewasa');
    $table->integer('anak')->default(0);
    $table->text('pesan')->nullable();
    $table->integer('malam')->default(0);
    $table->integer('total_harga')->default(0);
    $table->enum('status', ['pending', 'approved', 'cancelled'])->default('pending');
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
        Schema::dropIfExists('bookings');
    }
};