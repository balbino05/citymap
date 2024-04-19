<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Alimentação',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tecnologia',
        ]);
        DB::table('categories')->insert([
            'name' => 'Saúde',
        ]);
        DB::table('categories')->insert([
            'name' => 'Serviços',
        ]);
        DB::table('categories')->insert([
            'name' => 'Distribuição',
        ]);
        DB::table('categories')->insert([
            'name' => 'Outro',
        ]);
    }
}
