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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('email')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('researchgate')->nullable();
            $table->string('orcid')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('about')->nullable();
            $table->timestamps();
            $table->integer('order')->default(0);
            $table->string('image')->nullable();
            $table->boolean("show_homepage")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
