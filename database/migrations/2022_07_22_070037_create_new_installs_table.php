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
        Schema::create('new_installs', function (Blueprint $table) {
            $table->id();
            $table->string('sc_number')->unique();
            $table->string('office_name');
            $table->string('detail_end_cust');
            $table->datetime('wfm_start');
            $table->string('pic_office_name');
            $table->string('no_hp_pic');
            $table->string('product_diminta');
            $table->string('project_name');
            $table->integer('bandwidth');
            $table->string('target_treg');
            $table->string('witel');
            $table->string('alamat');
            $table->decimal('longitude', 15,10);
            $table->decimal('latitude', 15,10);
            $table->string('petugas');
            $table->datetime('tgl_create');
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
        Schema::dropIfExists('new_installs');
    }
};
