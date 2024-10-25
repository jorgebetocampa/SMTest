<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {
        for ($i = 0; $i < 10; $i++) {
            DB::table('clients')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . 'gmail.com',
                'cel' => Str::random(10),
                'address' => Str::random(50)
            ]);
        }
    }
}
