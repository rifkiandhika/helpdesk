<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('keluhan');
            $table->enum('status_ticket', ['Direspon','Selesai','Menunggu'])->default('Menunggu');
            $table->longText('keterangan');
            $table->string('tingkat_kesulitan')->nullable();
            $table->string('tempat');
            $table->longText('image')->nullable();
            $table->integer('user_id');
            $table->string('divisi')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
