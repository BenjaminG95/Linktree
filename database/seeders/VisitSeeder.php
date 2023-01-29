<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\Visit;
use Exception;
use Illuminate\Database\Seeder;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        Link::all()->each(function () {
            Visit::factory(random_int(1,5))->create();
        });
    }
}
