<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ReceiptRegistrationSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        $faker = Faker::create();
        $receipt_registrations = [];

        $prizes = [1, 1, 1, 1, 4, 4, 4, 3, 3, 2];
        /*
        Nagroda 3 stopnia - 3 sztuki
        Nagroda 2 stopnia - 2 sztuki
        Główna wygrana - 1 sztuka
        */

        for ($i = 0; $i < 10; $i++) {
            $receipt_registrations[] =
                [
                    'participant_name' => $faker->name(),
                    'email' => $faker->email(),
                    'phone' => $faker->phoneNumber(),
                    'receipt_number' => $faker->numberBetween(100000, 999999),
                    'purchase_date' => '2025-07-' . $faker->numberBetween(24, 31),
                    'receipt_image_path' => null,
                    'contest_answer' => $faker->text(150),
                    'consent_regulations' => 1,
                    'consent_rodo' => 1,
                    'consent_external' => 0,
                    'referrer' => null,
                    'landing_url' => null,
                    'ip_address' => '127.0.0.1',
                    'store_id' => $faker->numberBetween(1, 4),
                    'prize_id' => $prizes[$i],
                    'created_at' => $now,
                    'updated_at' => $now
                ];
        };

        DB::table('receipt_registrations')->insert($receipt_registrations);
    }
}
