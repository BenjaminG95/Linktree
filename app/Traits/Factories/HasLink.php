<?php

namespace App\Traits\Factories;

use App\Models\Link;

trait HasLink
{
    private function getLink()
    {
        return Link::query()->inRandomOrder()->first() ?? Link::factory()->create()->first();
    }
}
