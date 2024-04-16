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
        Schema::create('modifies', function (Blueprint $table) {
            $table->id();
            $table->string('sc_number')->unique();
            $table->string('office_name');
            $table->string('detail_end_cust');
            $table->string('sid');
            $table->string('witel');
            $table->string('req_modify');
            $table->string('pic_office_name');
            $table->integer('req_bandwidth');
            $table->datetime('wfm_start');
            $table->string('alamat');
            $table->decimal('longitude', 15,10);
            $table->decimal('latitude', 15,10);
            $table->datetime('tgl_create');
            $table->string('petugas');
            $table->string('status');
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
        Schema::dropIfExists('modifies');
    }
};
