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
        Schema::create('content_list', function (Blueprint $table) {
            $table->id();
            $table->string('case_no', 25);
            $table->string('destination', 25);
            $table->string('order_no', 25);
            $table->string('prod_month', 25);
            $table->string('c_size', 25);
            $table->string('g_w', 25);
            $table->string('n_w', 25);
            $table->string('cm_final', 25)->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_list');
    }
};
