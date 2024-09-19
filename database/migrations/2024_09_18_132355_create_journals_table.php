<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('issn', 20)->nullable();
            $table->string('frequency')->nullable();
            $table->string('publisher')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journals');
    }
};
