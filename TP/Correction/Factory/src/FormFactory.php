<?php

namespace Factory ;

// usine pour fabriquer des objets design pattern
class FormFactory {
  
    // la méthode create est typé Form c'est une interface, ici, chaque objet de cette factory implémente cet interface, elles ont donc toutes le même type Form 
    public function create( string $className, array $params = []) : Form{

        // Comme le nom de la classe est une variable on doit mettre le préfixe du namespace, création à la volée, différent de new Circle qui est déjà dans le namespace Factory si vous l'appelez directement ici
        $className = "Factory\\" . ucfirst( strtolower( $className ) );

        return new $className($params); 
    }

    // moins générale 
    public function createCircle(): Circle{ return new Circle([]) ;}
    public function createSquare(): Square{ return new Square([]) ;}

}