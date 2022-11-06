<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'cpf' => '636.422.470-91',
            'date_birthday' => '2000-01-01',
            'state' => 'EUA',
            'city' => 'Florida',
            'gender' => 'M',
        ];
    }
}
