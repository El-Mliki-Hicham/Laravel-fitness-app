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
        Schema::create('categories_exerices', function (Blueprint $table) {
            $table->increments("id_categorie_exercice");
            $table->string('nom_categorie_exercice')->nullable();
            $table->string('photo_categorie_exercice')->nullable();
            $table->timestamps();

        });
        Schema::create('exercices', function (Blueprint $table) {
            $table->increments("id_exercice")->nullable();
            $table->string('nom_exercice')->nullable();
            $table->unsignedInteger('categorie_exercice')->nullable();
            $table->string('description_exercice')->nullable();
            $table->string('repetition_exercice')->nullable();
            $table->string('photo_exercice')->nullable();
            $table->foreign('categorie_exercice')
            ->references('id_categorie_exercice')
            ->on('categories_exerices')
            ->onDelete('cascade');
            $table->timestamps();

        });

        Schema::create('jours', function (Blueprint $table) {
            $table->increments("id_jour")->nullable();
            $table->string('jour')->nullable();        
            $table->string('description_jour')->nullable();        
            $table->timestamps();
           
           

        });
        Schema::create('exercices_de_jours', function (Blueprint $table) {
            $table->string('id_programme')->nullable();        
            $table->unsignedInteger("categorie_id")->nullable();     
            $table->unsignedInteger("jour_id")->nullable();
            $table->unsignedInteger("exercice_id")->nullable();
            $table->timestamps();
            $table->foreign('categorie_id')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');
            $table->foreign('jour_id')
            ->references('id_jour')
            ->on('jours')
            ->onDelete('cascade');
            $table->foreign('exercice_id')
            ->references('id_exercice')
            ->on('exercices')
            ->onDelete('cascade');
        });
    }




    // sql

    // SELECT *   FROM `exercices_de_jours` 

    // INNER JOIN categories ON exercices_de_jours.categorie_id=categories.id_categorie
    
    // INNER JOIN jours ON exercices_de_jours.id_jour=jours.id_jour
    
    // INNER JOIN exercices ON exercices_de_jours.exercice_id=exercices.id_exercice


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
