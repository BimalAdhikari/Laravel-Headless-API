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
        Schema::create('etappes', function (Blueprint $table) {
            $table->id();
            $table->integer(column: 'stage_number');
            $table->date(column: 'stage_date');
            $table->string(column: 'stage_type');
            $table->string(column: 'start_city');
            $table->string(column: 'finish_city');
            $table->float(column: 'distance_km');
            $table->integer(column: 'elevation_d_plus');
            $table->text(column: 'description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etappes');
    }
};
