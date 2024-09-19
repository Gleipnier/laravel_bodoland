<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('e_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('url')->nullable();
            $table->text('access_information')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('e_resources');
    }
};
