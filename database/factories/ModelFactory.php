<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//Seeder de usuarios
$factory->define(Hotel\User::class, function (Faker\Generator $faker) {
    return [
        'rut' => $faker->randomNumber($nbDigits = 7),
        'nombre' => $faker->name,
        'apellidos' => $faker->lastName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'privilegios' => $faker->randomElement(['user','admin']),
        'remember_token' => str_random(10),
    ];
});

//Seeder de habitaciones
$factory->define(Hotel\Habitaciones::class,function(Faker\Generator $faker){
  return[
    'tipo' => $faker->randomElement(['simplex','duplex']),
    'valor' =>$faker->numberBetween($min = 10000, $max = 40000),
  ];
});

//seeder de huespedes
$factory->define(Hotel\Huespedes::class,function(Faker\Generator $faker){
  return[
    'pasaporte' => $faker->randomNumber($nbDigits = 7),
    'nombres' => $faker->name,
    'apellidos' => $faker->lastName,
    'universidad' => $faker->name,
    'pais' => $faker->country,
    'nacionalidad' => $faker->name,
    'email' => $faker->safeEmail,
  ];
});

//seeder de docentes
$factory->define(Hotel\Docentes::class,function(Faker\Generator $faker){
  return[
    'pasaporte' => $faker->randomNumber($nbDigits = 7),
    'nombres' => $faker->name,
    'apellidos' => $faker->lastName,
    'universidad' => $faker->name,
    'pais' => $faker->country,
    'nacionalidad' => $faker->name,
    'email' => $faker->safeEmail,
  ];
});

//seeder de Testimonios
$factory->define(Hotel\Testimonios::class,function(Faker\Generator $faker){
  return[
    'descripcion' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    'fecha_creacion' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks'),
    'autor' => $faker->name,
  ];
});

//seeder de reserva.
$factory->define(Hotel\Reservas::class,function(Faker\Generator $faker){
  return[
    'status' => $faker->randomElement['confirmado','reservado'],
    'n_noches' => $faker->randomDigit,
    'f_entrada' => $faker->dateTimeThisYear,
    'f_salida' => $faker->dateTime($max = 'f_entrada'),
  ];
});
