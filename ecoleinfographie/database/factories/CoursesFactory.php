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
$factory->define(App\Models\Course::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->text($maxNbChars = 30),
        'orientation' => $faker->randomElement($array = array('Web', '3D/Vidéo', 'Design graphique', 'Commun')),
        'duration' => $faker->numberBetween($min = 15, $max = 200),
        'ects' => $faker->numberBetween($min = 1, $max = 20),
        'ratio' => $faker->randomElements($array = array(
            'Travaux pratique' => $faker->numberBetween($min = 15, $max = "60"),
            'Travaux dirigés' => $faker->numberBetween($min = 15, $max = "60"),
            'Théorie' => $faker->numberBetween($min = 15, $max = "60"))
        ),
        'evaluation' => $faker->randomElement($array = array(
            'Examen écrit', 'Examen orale', 'Travail pratique'
        )),
        'bloc' => $faker->numberBetween($min = 1, $max = 3),
        'quadrimester' => $faker->randomElement($array = array(
            '1', '2', 'Toute l’année'
        )),
        'shortdescription' => $faker->sentences($nbWords = 1, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 20, $variableNbSentences = true),
        'objectives' => $faker->sentences($nb = 7, $variableNbSentences = true),
    ];
});
