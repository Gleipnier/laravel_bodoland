<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->enum('type', ['fiction', 'non-fiction', 'academic'])->nullable();
            $table->string('image_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['type', 'image_url']);
        });
    }
};
