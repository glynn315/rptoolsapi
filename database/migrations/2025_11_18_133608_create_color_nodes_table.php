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
        Schema::create('color_nodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diagram_id');
            $table->string('label');
            $table->string('color_key');
            $table->string('color_code');
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('created_by');
            $table->date('created_date');
            $table->timestamps();

            $table->foreign('diagram_id')->references('id')->on('diagrams_information')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_nodes');
    }
};
