<?php

use Illuminate\Database\Seeder;

class carsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\car::class, 100)->create();
    }
}
