<?php

//* FRONT CONTROLLER

// inclure les dépendances composer
require __DIR__ . '/../vendor/autoload.php';
// Grâce à ce fichier, les librairies se chargent automatiquement

//* création d'une instance AltoRouter
// on n'est pas dans une classe ni dans une fonction, donc on est dans le contexte global
$router = new AltoRouter();

//* on déclare à Altorouter que notre site est placé dans des sous-répertoires
//dump($_SERVER); 
$router->setBasePath($_SERVER['BASE_URI']);
// $_SERVER['BASE_URI'] est créée via le .htaccess



//* Tableau des routes
// 1 route = 1 url + 1 nom de controller à instancier + 1 méthode à exécuter + 1 méthode HTTP + 1 identifiant

$routes = [
    //* la route 'HOME'
    [
        'GET', // méthode HTTP de la route
        '/', // url de la route
        // target
        [ 
            'controller' => 'MainController',
            'action' => 'home' // correspond à la méthode à exécuter
        ],
        'home' // identifiant unique de notre route 'home'
    ],

    //* la route 'types'
    [
        'GET', // méthode HTTP de la route
        '/types/[i:id]', // url de la route
        // target
        [ 
            'controller' => 'MainController',
            'action' => 'type' // correspond à la méthode à exécuter
        ],
        'type' // identifiant unique de notre route
    ],

    //* la route 'liste-types'
    [
        'GET', // méthode HTTP de la route
        '/liste-types', // url de la route
        // target
        [ 
            'controller' => 'MainController',
            'action' => 'typeList' // correspond à la méthode à exécuter
        ],
        'typeList' // identifiant unique de notre route
    ],

    //* la route 'pokemon-types'
    [
        'GET', // méthode HTTP de la route
        '/pokemon-types/[i:id]', // url de la route
        // target
        [ 
            'controller' => 'MainController',
            'action' => 'detail' // correspond à la méthode à exécuter
        ],
        'detail' // identifiant unique de notre route
    ]

   
];

//* Je transmets à Altorouter mon tableau qui contient toutes mes routes
$router->addRoutes($routes);



//* Début du dispatcher

$match = $router->match();


if ($match !== false) {
    // On récupére avec altorouteur (le résultat de match()) les données de la route (mappé plus haut)
    $controllerToUse = 'Pokedex\\Controllers\\' . $match['target']['controller'];
    $methodToUse = $match['target']['action'];


    // php peut utiliser une variable en tant que nom de la méthode
    // $methodToUse est une chaîne de caractères, donc on peut transformer $mainController->$methodToUse() en $mainController->home();
    $controller = new $controllerToUse();
    $controller->$methodToUse($match['params']);
}
else {
    http_response_code('404');
}


//* Fin Dispatcher