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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->string('Orario_di_partenza');
            $table->string('Orario_di_arrivo');
            $table->string('Codice_Treno');
            $table->string('Numero_Carrozze');
            $table->string('In_orario');
            $table->string('Cancellato');
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
        Schema::dropIfExists('trains');
    }
};
