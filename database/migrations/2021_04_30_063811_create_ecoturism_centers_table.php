<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoturismCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoturism_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image_url');
            $table->string('description',50);
            $table->longText('description_large');
            $table->longText('ubication')->nullable();
            $table->longText('services')->nullable();
            $table->longText('activities')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->enum('type',['socio','colaborador']);
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
        Schema::dropIfExists('ecoturism_centers');
    }
}
