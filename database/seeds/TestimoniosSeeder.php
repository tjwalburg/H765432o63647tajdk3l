<?php

use Illuminate\Database\Seeder;

class TestimoniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel\Testimonios::class,15)->create();
    }
}
