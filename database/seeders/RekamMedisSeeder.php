<?php

namespace Database\Seeders;

use App\Models\RekamMedis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rekam_medis')->insert([
            RekamMedis::factory()->count(40)->create()
        ]);
    }
}
