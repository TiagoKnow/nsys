<?php

use Illuminate\Database\Seeder;
use App\Os;

class OsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Os::class, 1500)->create();
    }
}
