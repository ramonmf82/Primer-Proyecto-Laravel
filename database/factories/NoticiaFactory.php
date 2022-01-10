<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titulo = $this->faker->sentence();

        return [
            'titulo' => $titulo,
            'slug' => Str::slug($titulo, '-'),
            'subtitulo' => $this->faker->sentence(),
            'cuerpo' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['informatica', 'deportes', 'ciencia', 'actualidad']),
            'imagen' => $this->faker->randomElement(['/img/Mario.jpg', '/img/minion.jpg']),
        ];
    }
}
