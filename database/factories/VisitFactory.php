<?php

namespace Database\Factories;

use App\Models\Visit;
use App\Traits\Factories\HasLink;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Visit>
 */
class VisitFactory extends Factory
{
    use HasLink;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $link = $this->getLink();

        return [
            'link_id' => $link->id,
            'user_agent' => (fake()->boolean(50) ? fake()->text(15) : null),
        ];
    }
}
