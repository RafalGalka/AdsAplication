<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->insert([
            [
                'id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Szczotka do włosów',
                'description' => 'Nowa szczotka do włosów firmy Remington',
                'price' => 55.05,
            ],
            [
                'id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Pasta Colgate',
                'description' => 'Pasta Colgate Max White 75ml',
                'price' => 6.55,
            ],
        ]);
    }
}
