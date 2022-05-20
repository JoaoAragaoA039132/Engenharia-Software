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
        Schema::create('menus', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('bebida');
            $table->string('sobremesa');
            $table->string('sopa');
            $table->string('entrada');
            $table->string('prato_principal');
            $table->string('categoria');
            $table->string('preco');
            $table->timestamp('data_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
