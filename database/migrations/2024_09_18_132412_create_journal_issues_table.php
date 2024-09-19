<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('journal_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('journal_id')->constrained()->onDelete('cascade');
            $table->string('issue_number');
            $table->date('publication_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journal_issues');
    }
};
