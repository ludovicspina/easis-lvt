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
        Schema::create('hdvs', function (Blueprint $table) {
            $table->id();
            $table->string("objet");
            $table->string("joueur");
            $table->string("prix");
            $table->boolean("typeRequete");
            $table->string("quantite");
            $table->string("region");
            $table->string("serveur");
            $table->integer('for')->nullable();
            $table->integer('end')->nullable();
            $table->integer('dex')->nullable();
            $table->integer('int')->nullable();
            $table->string('eveil')->nullable();
            $table->string('niveau')->nullable();
            $table->integer('eau')->nullable();
            $table->integer('feu')->nullable();
            $table->integer('terre')->nullable();
            $table->integer('foudre')->nullable();
            $table->integer('vent')->nullable();
            $table->integer('patk')->nullable();
            $table->integer('pdef')->nullable();
            $table->integer('ppv')->nullable();
            $table->integer('ppm')->nullable();
            $table->integer('ppf')->nullable();
            $table->integer('userId');
            $table->boolean('isShowed')->default(1);
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
        Schema::dropIfExists('hdvs');
    }
};
