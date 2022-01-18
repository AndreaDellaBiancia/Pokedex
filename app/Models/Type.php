<?php

namespace Pokedex\Models;
use Pokedex\Utils\Database;
use \PDO;

class Type extends CoreModel
{
    
    private $name;
    
    



    public function findAll()
    {

        $sql = 'SELECT * FROM `type` ';

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();

        // j'execute ma requête pour récupérer les createurs
        $pdoStatement = $pdo->query($sql);

        // PDO va construire un tableau qui a pour éléments des objets creators 
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // renvoie un tableau d'objets
        return $types;
    }

    public function findPokemonByTypeId($typeId)
    {
        $sql = "SELECT 
                pokemon_type.pokemon_numero,
                pokemon_type.type_id,
                pokemon.nom,
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

  


}