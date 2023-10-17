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
        Schema::create('project_technology', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->nullable(); //perchè esiste già tabella projects
            $table->foreign('project_id') //rendo una foreign key
            ->references('id')//fa riferimento alla colonna id
            ->on("projects") //fa riferimento tabella projects
            ->onDelete("set null");

            $table->unsignedBigInteger('technology_id')->nullable();
            $table->foreign('technology_id') //rendo una foreign key
            ->references('id')//fa riferimento alla colonna id
            ->on("technologies") //fa riferimento tabella technologies
            ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
