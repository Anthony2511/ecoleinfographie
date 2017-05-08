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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Teacher::class, function (Faker\Generator $faker) {
    
    //$aEval = array('1, 2, Toute l’année');
    $firstname = $faker->firstName();
    $lastname = $faker->lastName();
    $title = $faker->name();
    $role = $faker->randomElement($array = array('Professeur', 'Professeur-invité'));
    $description = ['fr' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true)];
    $picture = $faker->imageUrl($width = 640, $height = 480, 'people');
    $email = $faker->safeEmail;
    
   
    
    return [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'title' => $title,
        'role' => ['fr' => $role ],
        'description' => $description,
        'picture' => $picture,
        'email' => $email,
        'status' => 'Visible'
    ];
});
