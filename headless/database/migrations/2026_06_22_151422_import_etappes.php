<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // IMPORTANT: You need $etappes = here!
       
$etappes = [
            [
                'stage_number' => 9,
                'stage_date' => '2025-07-13',
                'stage_type' => 'flat',
                'start_city' => 'Tours',
                'finish_city' => 'Blois',
                'distance_km' => 180.5,
                'elevation_d_plus' => 1400,
                'description' => 'Sprint stage in the Loire Valley',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_number' => 10,
                'stage_date' => '2025-07-14',
                'stage_type' => 'mountain',
                'start_city' => 'Ennezat',
                'finish_city' => 'Le Mont-Dore Puy De Sancy',
                'distance_km' => 165.3,
                'elevation_d_plus' => 4450,
                'description' => 'First high mountain stage with summit finish',
                'created_at' => now(),
                'updated_at' => now(),
            ],
];

        DB::table('etappes')->insert($etappes);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('etappes')->truncate();
    }
};