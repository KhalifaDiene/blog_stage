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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->boolean('status')->default(1); // Pour supprimer ou bloquer un article
            $table->boolean('publish')->default(0); // si l'article est publié ou pas (1 => publié, 2 => non publié).
            $table->integer('vue')->default(0); // Pour déterminer le nombre de vue de l'article.

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            // Pas besoin de faire migrer la clé users pour connaitre le blogueur - Seulement la catégorie suffit.

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
        Schema::dropIfExists('articles');
    }
};
