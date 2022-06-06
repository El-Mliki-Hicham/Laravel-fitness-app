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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments("id_categorie");
            $table->string('nom_categorie')->nullable();
            $table->string('description_categorie')->nullable();
            $table->string('photo_categorie')->nullable();
            $table->timestamps();

        });
        Schema::create('exercices', function (Blueprint $table) {
            $table->increments("id_exercice")->nullable();
            $table->string('nom_exercice')->nullable();
            $table->string('numero')->nullable();
            $table->string('description_exercice')->nullable();
            $table->string('photo_exercice')->nullable();
            $table->timestamps();

        });

        Schema::create('jours', function (Blueprint $table) {
            $table->increments("id_jour")->nullable();
            $table->string('jour')->nullable();        
            $table->timestamps();
           
           

        });
        Schema::create('exercices_de_jours', function (Blueprint $table) {
            $table->unsignedInteger("categorie_id")->nullable();     
            $table->unsignedInteger("id_jour")->nullable();
            $table->unsignedInteger("exercice_id")->nullable();
            $table->timestamps();
            $table->foreign('categorie_id')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');
            $table->foreign('id_jour')
            ->references('id_jour')
            ->on('jours')
            ->onDelete('cascade');
            $table->foreign('exercice_id')
            ->references('id_exercice')
            ->on('exercices')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spartel_gym');
    }
};
