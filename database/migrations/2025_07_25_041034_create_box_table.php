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
        Schema::create('box', function (Blueprint $table) {
            $table->id();
            $table->string('part_no', 25);
            $table->string('part_name', 50);
            $table->integer('total_qty');
            $table->boolean('status')->default(false);
            $table->integer('current_qty')->default(0);
            $table->unsignedBigInteger('id_content');
            $table->timestamps();

            $table->foreign('id_content')->references('id')->on('content_list')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('box');
    }
};
