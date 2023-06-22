<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'country_id' => 1,
                'name' => 'Nariño',
                'gob_code' => '52',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Magdalena',
                'gob_code' => '47',
                'area_code' => 5
            ],
            [
                'country_id' => 1,
                'name' => 'Amazonas',
                'gob_code' => '91',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Atlántico',
                'gob_code' => '8',
                'area_code' => 5
            ],
            [
                'country_id' => 1,
                'name' => 'Santander',
                'gob_code' => '68',
                'area_code' => 7
            ],
            [
                'country_id' => 1,
                'name' => 'Sucre',
                'gob_code' => '70',
                'area_code' => 5
            ],
            [
                'country_id' => 1,
                'name' => 'Norte de Santander',
                'gob_code' => '54',
                'area_code' => 7
            ],
            [
                'country_id' => 1,
                'name' => 'Vichada',
                'gob_code' => '99',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' =>
                'Archipiélago de San Andrés Providencia y Santa Catalina',
                'gob_code' => '88',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Risaralda',
                'gob_code' => '66',
                'area_code' => 6
            ],
            [
                'country_id' => 1,
                'name' => 'Guainía',
                'gob_code' => '94',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Bogotá D.C.',
                'gob_code' => '11',
                'area_code' => 1
            ],
            [
                'country_id' => 1,
                'name' => 'La Guajira',
                'gob_code' => '44',
                'area_code' => 5
            ],
            [
                'country_id' => 1,
                'name' => 'Vaupés',
                'gob_code' => '97',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Cundinamarca',
                'gob_code' => '25',
                'area_code' => 1
            ],
            [
                'country_id' => 1,
                'name' => 'Guaviare',
                'gob_code' => '95',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Antioquia',
                'gob_code' => '5',
                'area_code' => 4
            ],
            [
                'country_id' => 1,
                'name' => 'Boyacá',
                'gob_code' => '15',
                'area_code' => 8
            ],
            [
                'country_id' => 1,
                'name' => 'Meta',
                'gob_code' => '50',
                'area_code' => 8
            ],
            [
                'country_id' => 1,
                'name' => 'Caldas',
                'gob_code' => '17',
                'area_code' => 6
            ],
            [
                'country_id' => 1,
                'name' => 'Bolívar',
                'gob_code' => '13',
                'area_code' => 5
            ],
            [
                'country_id' => 1,
                'name' => 'Cauca',
                'gob_code' => '19',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Casanare',
                'gob_code' => '85',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Arauca',
                'gob_code' => '81',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Caquetá',
                'gob_code' => '18',
                'area_code' => 8
            ],
            [
                'country_id' => 1,
                'name' => 'Córdoba',
                'gob_code' => '23',
                'area_code' => 4
            ],
            [
                'country_id' => 1,
                'name' => 'Tolima',
                'gob_code' => '73',
                'area_code' => 8
            ],
            [
                'country_id' => 1,
                'name' => 'Cesar',
                'gob_code' => '20',
                'area_code' => 5
            ],
            [
                'country_id' => 1,
                'name' => 'Quindio',
                'gob_code' => '63',
                'area_code' => 6
            ],
            [
                'country_id' => 1,
                'name' => 'Huila',
                'gob_code' => '41',
                'area_code' => 8
            ],
            [
                'country_id' => 1,
                'name' => 'Valle del Cauca',
                'gob_code' => '76',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Putumayo',
                'gob_code' => '86',
                'area_code' => 2
            ],
            [
                'country_id' => 1,
                'name' => 'Chocó',
                'gob_code' => '27',
                'area_code' => 4
            ],
        ];

        Departament::factory()->createMany($data);
    }
}
