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
            $table->string('name_categorie')->nullable();
            $table->string('description_categorie')->nullable();
            $table->timestamps();

        });
        Schema::create('exercices', function (Blueprint $table) {
            $table->increments("id_exercice")->nullable();
            $table->string('nom_exercice')->nullable();
            $table->string('numero')->nullable();
            $table->string('description_exercice')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

        });

        Schema::create('jours', function (Blueprint $table) {
            $table->increments("id_jour")->nullable();
            $table->string('jour')->nullable();
            $table->unsignedInteger("categorie_id")->nullable();
            $table->unsignedInteger("exercice_id")->nullable();
            $table->timestamps();
            $table->foreign('categorie_id')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');;
            $table->foreign('exercice_id')
            ->references('id_exercice')
            ->on('exercices')
            ->onDelete('cascade');;
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
