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
        Schema::create('motor_defects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_id')->index()->constrained('motor_details')->onDelete('cascade');
            $table->string('code');
            $table->string('defect');
            $table->string('description');
            $table->string('picture');
            $table->string('reason');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_defects');
    }
};
