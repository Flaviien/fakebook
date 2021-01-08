<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create()->each(
            function ($user) {
                $user->publications()->saveMany(\App\Models\Publication::factory(2)->make());
            }
        );
    }
}
