<?php

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
        $this->call(UsersTableSeeder::class);
        factory(\App\Note::class, 50)->create();
        factory(\App\Img::class, 15)->create();
        factory(\App\DataNote::class, 50)->create();
    }
}
