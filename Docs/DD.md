Dictionnaire de données


## POKEMON (`pokemon`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du pokemon|
|nom|VARCHAR(255)|NOT NULL|Le nom du pokemon|
|attaque|INT| NOT NULL |Le poucentage pour l'attaque du pokemon|
|defense|INT| NOT NULL |Le poucentage pour la defense du pokemon|
|attaque_spe|INT| NOT NULL |Le poucentage pour l'attaque special du pokemon|
|defense_spe|INT| NOT NULL |Le poucentage pour la defense speciale du pokemon|
|vitesse|INT| NOT NULL |Le poucentage pour la vitesse du pokemon|
|numero|INT|NOT NULL|Le numero du pokemon|


## TYPE (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(255)|NOT NULL|Le nom du type|
|color|VARCHAR(255)|NOT NULL|La couleur du type|


## EMPREINTE (`footprint`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de l'empreinte|
|number|INT|NOT NULL|Le numero unique de l'empreinte|
|pokemon_id|INT| NOT NULL, UNSIGNED |L'id du pokemon auquel l'empreinte appartient |

## POKEMON_TYPE(`pokemon_type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la liaison entre les tables|
|pokemon_numero|INT| NOT NULL, UNSIGNED |Le numero du pokemon|
|type_id|INT| NOT NULL, UNSIGNED |L'identifiant du type|
