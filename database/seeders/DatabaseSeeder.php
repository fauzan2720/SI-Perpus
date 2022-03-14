<?php

namespace Database\Seeders;

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
        // jalankan dengan perintah: php artisan db:seed

        // \App\Models\User::factory(10)->create();
        \App\Models\Member::factory(4)->create();
        \App\Models\Officer::factory(4)->create();
        \App\Models\Book::factory(4)->create();
        // \App\Models\BookBorrow::factory(3)->create();
    }
}
