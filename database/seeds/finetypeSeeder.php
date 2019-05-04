<?php

use Illuminate\Database\Seeder;

class finetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FineType::class, 50)->create();
    }
}
