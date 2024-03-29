<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->string('mobile1');
            $table->string('mobile2')->nullable();
            $table->string('mail1')->default('laravel@mail.com');
            $table->string('mail2')->nullable();
            $table->text('address');
            $table->text('map');
            $table->string('timezone')->default('UTC');
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google_plus')->nullable();
            // $table->string('logo_primary')->default('laravel.svg');
            // $table->string('logo_secondary')->nullable('laravel.svg');
            // $table->string('favicon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_shops');
    }
}
