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
$factory->define(App\Models\Student::class, function (Faker\Generator $faker) {
    
    $firstname = $faker->firstName();
    $lastname = $faker->lastName();
    $profession = $faker->text($maxNbChars = 25);
    $year = $faker->numberBetween($min = 1995, $max = 2017);
    $orientation = $faker->randomElement($array = array('web', '3D', '2D', 'all'));
    $isFreelance = $faker->boolean($chanceOfGettingTrue = 10);
    $company = '[{"name":"' . $faker->company . '","url":"' . $faker->email . '"}]';
    $has_interview = $faker->boolean($chanceOfGettingTrue = 10);
    
    
    return [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'image' => '/img/no-avatar.jpg',
        'profession' => ['fr' => $profession],
        'year' => $year,
        'orientation' => $orientation,
        'is_freelance' => $isFreelance,
        'company' => $company,
        'has_interview' => $has_interview,
        'interview' => ['fr' => "[{\"question\":\"Dans quelle boite travailles-tu ?\",\"response\":\"EPIC - epic.net Le site souffre de la vieillesse ; une autre version est en cours mais avec le planning chargé, ce n'est pas pour demain. Si je me souviens bien, pour Toon, tu es déjà venu dans nos derniers locaux en date rue Paradis, en face de la gare des Guillemins ; ça n'a pas changé ! À part la couleur d'un mur et quelques lumières en plus ! Ah, et nous sommes environ 13 en ce moment, en partant de 5 en 2010 ; pour une idée des effectifs.\"},{\"question\":\"Quelle est ta fonction actuelle ?\",\"response\":\"Dans cette oipe, j'assume actuellement le rôle de front-end developer, tant que le titre de \\\"bidouilleur logique\\\" n'est pas reconnu ! Sur mon contrat par contre, il est autant fait mention de designer que de developer. Tout cela n'est purement que théorique, mais dans de petites structures, de petites équipes, nous ne pouvons nous permettre de rester cloîtrer dans notre seule fonction. Question de planning, de maladies, de vacances, peu importe, il fallait que ça tourne donc il était envisageable de pouvoir endosser plusieurs vestes sur une même journée.\"}]"]
    ];
});
