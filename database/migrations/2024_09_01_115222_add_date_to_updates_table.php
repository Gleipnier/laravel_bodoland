<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('updates', function (Blueprint $table) {
        $table->timestamp('date')->nullable(); // or use ->date() if you prefer just the date without time
    });
}

public function down()
{
    Schema::table('updates', function (Blueprint $table) {
        $table->dropColumn('date');
    });
}

};
