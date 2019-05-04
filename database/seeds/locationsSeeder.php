<?php

use Illuminate\Database\Seeder;

class locationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\location::class, 100)->create();
    }
}
