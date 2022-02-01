<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => 'Amancio',
            'last_name' => 'Ortega',
            'department' => 'Moda',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('employees')->insert([
            'first_name' => 'Fulano',
            'last_name' => 'Mengano',
            'department' => 'Tendencias',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('employees')->insert([
            'first_name' => 'Juanito',
            'last_name' => 'García',
            'department' => 'RRHH',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
