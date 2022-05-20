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
            $table->increments("id");
            $table->string('name_categorie')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

        });
        Schema::create('exercices', function (Blueprint $table) {
            $table->increments("id")->nullable();
            $table->string('exercice')->nullable();
            $table->string('numero')->nullable();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

        });

        Schema::create('jours', function (Blueprint $table) {
            $table->increments("id")->nullable();
            $table->string('jour')->nullable();
            $table->unsignedInteger("id_categories")->nullable();
            $table->unsignedInteger("id_exercice")->nullable();
            $table->timestamps();
            $table->foreign('id_categories')
            ->references('id')
            ->on('categories');
            $table->foreign('id_exercice')
            ->references('id')
            ->on('exercices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sports');
    }
};
