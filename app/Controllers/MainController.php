<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\PokemonType;
use Pokedex\Models\Type;


class MainController
{
    // méthode show
    public function show($viewName, $viewData = [])
    {
        // on donne la possibilité à la méthode show d'accéder à $router qui est défini dans le contexte global
        // => mot clé global
        global $router;

        // on définit cette variable pour que nos vues puissent mettre le lien de la page courante en avant
        // Toutes nos données dynamiques à utiliser dans les vues se trouveront dans $viewData (par souci de simplification)
        $viewData['currentPage'] = $viewName;

        // on charge les données qui sont affichées dans les vues header.tpl.php et footer.tpl.php => peu importe la page affichée, on doit fournir ces données, donc on centralise cette récupération directement dans show()



        // juste avant l'inclusion des views (maintenant qu'on a fini de déterminer ce qui est présent dans $viewData)
        // on demande à PHP de générer une variable pour chaque élément dans $viewData
        extract($viewData);



        // __DIR__ vaut /var/www/html/S05/..../Controllers
        require __DIR__ . '/../views/header.tpl.php';
        // on inclut une vue selon la valeur du paramètre $viewName
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }

    
    function home($params)
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAllPokemonHome();

        $this->show('home', ['pokemons' => $pokemons]);
    }


    public function typeList()
    {
        $typeModel = new Type();
        $types = $typeModel->findAll();

        $this->show('typeList', ['types' => $types]);
    }

    public function type($param)
    {
        $pokemonTypeModel = new PokemonType();
        $pokemons = $pokemonTypeModel->findPokemonByTypeId($param['id']);

        $this->show('type', ['pokemons' => $pokemons]);
    }

    public function detail($param)
    {
        $pokemonTypeModel = new PokemonType();
        $pokemon = $pokemonTypeModel->findCompletePokemon($param['id']);

        $this->show('detail', ['pokemon' => $pokemon]);
    }
}


