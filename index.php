<?php

//install twig manually or via composer
//install twig extension for twig syntax highlighting for PHP Twig in vs code

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    // 'cache' => './compilation_cache',
    'cache' => false,
]);



//echo $twig->render('index.html', [
// if we use block/endblock, we should render child html, which is crew.html in our case, rendering index.html will not show anything
echo $twig->render('crew.html', [
    'name' => 'USCSS Nostromo',
    'type' => 'Hauler',
    'owner' => 'Weyland-Utani',
    'reg-number' => '180924609',
    'crew' => [
            [
                'name' => 'Ellen Ripley',
                'role' => 'Warrant officer',
                'status' => 'Alive',
                'reg-number' => '01'
            ],
            [
                'name' => 'Ash',
                'role' => 'Science officer',
                'notes' => 'Possibly synthetic',
                'status' => 'Unknown',
                'reg-number' => '02',
            ],
            [
                'name' => 'Parker',
                'role' => 'Cheif Engineer',
                'status' => 'Dead',
                'reg-number' => '03',
            ],

        ],
    ]);


?>