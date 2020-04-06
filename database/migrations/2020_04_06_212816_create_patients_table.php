<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('last_name', 150);
            $table->string('telefono', 14)->default('00-00-00-00-00');
            $table->string('colonia');
            $table->string('ciudad')->default('coeneo');
            $table->string('curp', 18)->unique();
            $table->date('fecha_de_nacimiento');
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
        Schema::dropIfExists('patients');
    }
}
