<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    protected $model = Tweet::class;

    protected $hashtagList = [
        "amor",
        "viajes",
        "naturaleza",
        "fotografía",
        "moda",
        "arte",
        "música",
        "comida",
        "belleza",
        "familia",
        "farina",
        "amistad",
        "felicidad",
        "inspiración",
        "aventura",
        "salud",
        "deporte",
        "educación",
        "negocios",
        "tecnología",
        "diseño",
        "creatividad",
        "cultura",
        "historia",
        "cine",
        "libros",
        "recetas",
        "mascotas",
        "autoayuda",
        "motivación",
    ];

    protected function generateHashtags(int $max)
    {
        $hashtags = [];
        foreach (range(1, random_int(1, $max)) as $_) {
            $hashtags[] = $this->hashtagList[random_int(0, count($this->hashtagList) - 1)];
        }

        return json_encode(array_values(array_unique($hashtags)), JSON_UNESCAPED_UNICODE);
    }

    public function definition(): array
    {
        return [
            'user' => fake()->userName(),
            'content' => fake()->realText(140),
            'hashtags' => $this->generateHashtags(random_int(3, 10)),
            'likes_count' => fake()->numberBetween(0, 100),
            'published_at' => fake()->dateTimeBetween('-1 years'),
        ];
    }
}
