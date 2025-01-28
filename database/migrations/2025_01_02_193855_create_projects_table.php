<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->nullable();
            $table->text('abstract')->nullable();
            $table->text('body')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->date('project_date')->nullable();
            $table->timestamps();
            $table->integer('order')->default(0);
            $table->boolean("show_homepage")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
