<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use \PDO;


class PokemonType extends CoreModel
{
    
    private $pokemon_numero;
    private $type_id;

    public function findPokemonByTypeId($typeId)
    {
        $sql = "SELECT 
                pokemon_type.pokemon_numero,
                pokemon_type.type_id,
                pokemon.nom,
                pokemon.id,
                type.name as type_name         
                FROM
                `pokemon_type`
                INNER JOIN
                `pokemon`
                ON pokemon.numero = pokemon_type.pokemon_numero
                INNER JOIN
                `type`
                ON 
                type.id = pokemon_type.type_id
                WHERE 
                type.id =  $typeId ";

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();

        // j'execute ma requête pour récupérer les createurs
        $pdoStatement = $pdo->query($sql);

        // PDO va construire un tableau qui a pour éléments des objets creators 
        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // renvoie un tableau d'objets
        return $pokemons;
    }

    public function findCompletePokemon($pokemonId)
    {
        $sql = "SELECT 
                pokemon_type.pokemon_numero,
                pokemon_type.type_id,
                pokemon.*,
                type.color,
                type.name as type_name       
                FROM
                `pokemon_type`
                INNER JOIN
                `pokemon`
                ON pokemon.numero = pokemon_type.pokemon_numero
                INNER JOIN
                `type`
                ON 
                type.id = pokemon_type.type_id
                WHERE 
                pokemon.id =  $pokemonId ";

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();

        // j'execute ma requête pour récupérer les createurs
        $pdoStatement = $pdo->query($sql);

        // PDO va construire un tableau qui a pour éléments des objets creators 
        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // renvoie un tableau d'objets
        return $pokemons;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of pokemon_numero
     */ 
    public function getPokemonNumero()
    {
        return $this->pokemon_numero;
    }

    /**
     * Set the value of pokemon_numero
     *
     * @return  self
     */ 
    public function setPokemonNumero($pokemon_numero)
    {
        $this->pokemon_numero = $pokemon_numero;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
}
