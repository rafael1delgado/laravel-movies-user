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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('genre')->nullable();
            $table->integer('release_year')->nullable();
            $table->boolean('remake')->nullable();
            $table->foreignId('country_id')->nullable()->references('id')->on('countries');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.n
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
