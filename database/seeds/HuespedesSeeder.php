<?php

use Illuminate\Database\Seeder;

class HuespedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel\Huespedes::class,15)->create();
    }
}
