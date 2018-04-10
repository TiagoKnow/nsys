<?php

use Illuminate\Database\Seeder;
use app\Cliente;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cliente::class, 3650)->create();
    }
}
