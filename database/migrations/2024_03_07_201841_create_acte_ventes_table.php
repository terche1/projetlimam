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
        Schema::create('acte_ventes', function (Blueprint $table) {
            $table->id();
            $table->string('NomVendeur')->nullable();
            $table->integer('NNIVendeur')->nullable();
            $table->date('DateNaissanceVendeur')->nullable();
            $table->String('NomAcheteur')->nullable();
            $table->integer('NNIAcheteur')->nullable();
            $table->date('DateNaissanceAcheteur')->nullable();
            $table->String('ChoseVendu')->nullable();
            $table->Integer('Prix')->nullable();
            $table->String('Temoin1')->nullable();
            $table->Integer('NNITemoin1')->nullable();
            $table->String('Temoin2')->nullable();
            $table->Integer('NNITemoin2')->nullable();
            
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
        Schema::dropIfExists('acte_ventes');
    }
};
