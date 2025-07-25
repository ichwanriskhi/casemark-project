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
        Schema::create('box_scan_log', function (Blueprint $table) {
            $table->id();
            $table->string('seq', 25);
            $table->string('part_no', 25);
            $table->integer('qty');
            $table->string('case_no', 25);
            $table->datetime('scan_date');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('box_scan_log');
    }
};
