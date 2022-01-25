<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text("titre");
            $table->string("image");
            $table->json('photos');
            $table->text("description");
            $table->text("capacite");
            $table->text("tarifs");
            $table->text("taxes_sejour");
            $table->text("options_possibles");
            $table->text("autre_option")->nullable();
            $table->json("tag");
            $table->json("dates");
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
        Schema::dropIfExists('properties');
    }
}
