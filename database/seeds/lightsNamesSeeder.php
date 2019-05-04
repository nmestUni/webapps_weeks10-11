<?php

use Illuminate\Database\Seeder;

class lightsNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\lightsname::class, 100)->create();
    }
}
