<?php

namespace Database\Factories;

use App\Models\Oficio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oficio>
 */
class OficioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [


            'numeracao' => 1,
            'ano'  => $this->faker->year(),
            'data' => $this->faker->datetime(),
            'cidade' => $this->faker->city,
            'destinatario' => $this->faker->word,
            'situacao' => 'Protocolado',
            'assunto' => $this->faker->sentence,
           
            'conteudo'  => $this->faker->sentence(500),
           
            'tratamento'  => $this->faker->word(),
            'cargodestino'  => $this->faker->sentence,
            'localdestino'  => $this->faker->sentence,
                      
        ];
    }  
}
