<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HabitacionesSeeder::class);
        $this->call(HuespedesSeeder::class);
        $this->call(DocentesSeeder::class);
    }
}
