<?php

use Illuminate\Database\Seeder;

class ScoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Scout::class, 10)->create();
    }
}
