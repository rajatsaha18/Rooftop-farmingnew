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
        Schema::create('plant_care_schedules', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('plant_id')->constrained()->onDelete('cascade');
            $table->enum('type',['Watering','Fertilization']);
            $table->date('next_due_date');
            $table->string('frequency_in_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_care_schedules');
    }
};
