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
$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    
    $title = $faker->sentence($nbWords = 7, $variableNbWords = true);
    $image = $faker->imageUrl($width = 358, $height = 264);
    $introduction = $faker->paragraph($nbSentences = 4, $variableNbSentences = true);
    $orientation = $faker->randomElement($array = array('web', '3D', '2D'));
    
    return [
        'title' => ['fr' => $title],
        'date' => '2017-05-16',
        'image' => $image,
        'introduction' => ['fr' => $introduction],
        'content' => ['fr' => '<p>' . $faker->paragraph($nbSentences = 8, $variableNbSentences = true) . '</p>' . '<p>' . $faker->paragraph($nbSentences = 8, $variableNbSentences = true) . '</p>' . '<p>' . $faker->paragraph($nbSentences = 8, $variableNbSentences = true) . '</p>' . '<p>' . $faker->paragraph($nbSentences = 8, $variableNbSentences = true) . '</p>'],
        'status' => 'PUBLIÉ',
        'orientation' => $orientation,
        'category_id' => 13
    ];
});
