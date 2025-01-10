<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expenses = [
            [
                'kind' => 'Alimentación',
                'date' => "2023-01-15",
                'description' => 'Almuerzo en restaurante',
                'amount' => 150000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Transporte',
                'description' => 'Pasaje en bus',
                'date' => "2023-02-10",
                'amount' => 25000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Ocio',
                'description' => 'Cine con amigos',
                'date' => "2023-03-05",
                'amount' => 120000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Vivienda',
                'description' => 'Pago de electricidad',
                'date' => "2023-04-12",
                'amount' => 300000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Alimentación',
                'date' => "2023-05-02",
                'description' => 'Desayuno en café',
                'amount' => 20000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Transporte',
                'description' => 'Taxi al trabajo',
                'date' => "2023-06-15",
                'amount' => 30000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Ocio',
                'description' => 'Concierto',
                'date' => "2023-07-20",
                'amount' => 150000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Vivienda',
                'description' => 'Pago de internet',
                'date' => "2023-08-30",
                'amount' => 100000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Alimentación',
                'date' => "2023-09-12",
                'description' => 'Cena en casa',
                'amount' => 50000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Salud',
                'description' => 'Medicamentos',
                'date' => "2023-10-05",
                'amount' => 75000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Transporte',
                'description' => 'Gasolina',
                'date' => "2023-11-01",
                'amount' => 100000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Ocio',
                'description' => 'Cena en restaurante',
                'date' => "2024-01-10",
                'amount' => 200000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Vivienda',
                'description' => 'Arriendo mensual',
                'date' => "2024-02-05",
                'amount' => 800000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Salud',
                'description' => 'Consulta médica',
                'date' => "2024-03-12",
                'amount' => 100000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Alimentación',
                'date' => "2024-04-18",
                'description' => 'Supermercado',
                'amount' => 300000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Transporte',
                'description' => 'Bicicleta (reparación)',
                'date' => "2024-05-22",
                'amount' => 50000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Ocio',
                'description' => 'Suscripción a Netflix',
                'date' => "2024-06-30",
                'amount' => 30000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Vivienda',
                'description' => 'Mantenimiento',
                'date' => "2024-07-15",
                'amount' => 150000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Salud',
                'description' => 'Exámenes de laboratorio',
                'date' => "2024-08-10",
                'amount' => 120000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Alimentación',
                'date' => "2024-09-05",
                'description' => 'Reunión familiar (catering)',
                'amount' => 400000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Transporte',
                'description' => 'Transporte privado',
                'date' => "2024-10-12",
                'amount' => 60000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Ocio',
                'description' => 'Visita a parque de diversiones',
                'date' => "2024-11-20",
                'amount' => 250000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Vivienda',
                'description' => 'Impuesto predial',
                'date' => "2025-01-10",
                'amount' => 200000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kind' => 'Salud',
                'description' => 'Vacunas',
                'date' => "2025-02-15",
                'amount' => 80000.00,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];



        // Insertar los datos de gastos en la tabla
        DB::table('expenses')->insert($expenses);
    }
}
