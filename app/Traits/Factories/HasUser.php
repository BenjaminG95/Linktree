<?php

namespace App\Traits\Factories;

use App\Models\User;

trait HasUser
{
    private function getUser()
    {
        return User::query()->inRandomOrder()->first() ?? User::factory()->create()->first();
    }
}
