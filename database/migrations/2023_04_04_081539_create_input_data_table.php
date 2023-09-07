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
        Schema::create('input_data', function (Blueprint $table) {
            $table->id();
            $table->string('op');
            $table->string('city');
            $table->string('company')->nullable();
            $table->string('field')->nullable();
            $table->string('cluster')->nullable();
            $table->string('well')->nullable();
            $table->timestamp('installation_date_at')->nullable();
            $table->timestamp('start_date_at')->nullable();
            $table->timestamp('stop_date_at')->nullable();
            $table->timestamp('dismantling_date_at')->nullable();
            $table->integer('operating_time')->nullable();
            $table->string('stop_reason')->nullable();
            $table->string('mode')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_data');
    }
};
