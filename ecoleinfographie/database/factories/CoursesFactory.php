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
    
    //$aEval = array('1, 2, Toute l’année');
    
    return [
        'title' => $faker->text($maxNbChars = 30),
        'orientation' => $faker->randomElement($array = array('Web', '3D/Vidéo', 'Design graphique', 'Commun')),
        'duration' => $faker->numberBetween($min = 15, $max = 120),
        'ects' => $faker->numberBetween($min = 1, $max = 20),
        'ratio' => '[{"type":"Travaux dirigés","hour":"15"},{"type":"Travaux pratique","hour":"30"}]',
        'evaluation' => '[{"type":"Examen écrit"},{"type":"Examen oral"}]',
        'bloc' => $faker->numberBetween($min = 1, $max = 3),
        'quadrimester' => $faker->randomElement($array = array('1', '2', 'Toute l’année')),
        'shortdescription' => $faker->sentences($nbWords = 1, $variableNbWords = true),
        'description' => '<p>' . $faker->paragraph($nbSentences = 8, $variableNbSentences = true) . '</p>',
        'objectives' => '[{"text":"Lorem ipsum dolor sit amet aspilicueta."},{"text":"Donec eu imperdiet tellus. Proin mauris lacus, fermentum vitae quam id, tincidunt faucibus metus."},{"text":"Sed eget sem ac est sagittis scelerisque. Morbi dapibus lorem."},{"text":"Nunc aliquam mi ultricies ligula tincidunt, efficitur laoreet purus efficitur. Morbi tortor orci, tempor vel feugiat ut, sagittis at leo."}]',
        'extras' => '{"metaDescription":"Test meta","metaKeywords":"lorem ipsum dolor sit amet"}'
    ];
});
