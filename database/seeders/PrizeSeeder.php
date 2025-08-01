<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrizeSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $prizes = [
            ['name' => 'Brak Wygranej', 'description' => 'Brak nagrody.', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Główna Wygrana', 'description' => 'Auto marki VW', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nagroda 2 stopnia',      'description' => 'Wycieczka zagraniczna', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nagroda 3 stopnia',      'description' => 'Zestaw ciastek', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('prizes')->insert($prizes);
    }
}
