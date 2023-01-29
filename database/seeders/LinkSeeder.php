<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        User::all()->each(function (User $user) {
            Link::factory(random_int(1,5))->create(['user_id' => $user->id]);
        });
    }
}
