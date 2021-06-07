<?php

use Illuminate\Database\Seeder;

class EstatesTableSeeder extends Seeder
{
    const STATES = [
        'Acre' => 'AC',
        'Alagoas' => 'AL',
        'Amapá' => 'AP',
        'Amazonas' => 'AM',
        'Bahia' => 'BA',
        'Ceará' => 'CE',
        'Distrito Federal' => 'DF',
        'Espírito Santo' => 'ES',
        'Goiás' => 'GO',
        'Maranhão' => 'MA',
        'Mato Grosso' => 'MT',
        'Mato Grosso do Sul' => 'MS',
        'Minas Gerais' => 'MG',
        'Pará' => 'PA',
        'Paraíba' => 'PB',
        'Paraná' => 'PR',
        'Pernambuco' => 'PE',
        'Piauí' => 'PI',
        'Rio de Janeiro' => 'RJ',
        'Rio Grande do Norte' => 'RN',
        'Rio Grande do Sul' => 'RS',
        'Rondônia' => 'RO',
        'Roraima' => 'RR',
        'Santa Catarina' => 'SC',
        'São Paulo' => 'SP',
        'Sergipe' => 'SE',
        'Tocantins' => 'TO',
    ];

    /*
    |--------------------------------------------------------------------------
    | Model Factories
    |--------------------------------------------------------------------------
    |
    | This directory should contain each of the model factory definitions for
    | your application. Factories provide a convenient way to generate new
    | model instances for testing / seeding your application's database.
    |
    */

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::STATES as $estado => $sigla) {
            $state = new \App\Models\State;
            $state->name = $estado;
            $state->initials = $sigla;
            $state->kwh_amount = 0.9;
            $state->save();
        }

        $product = new \App\Models\Product();
        $product->name = 'Gerador Zeus++ R14';
        $product->cost_per_kwh = 117.35;
        $product->save();
    }
}
