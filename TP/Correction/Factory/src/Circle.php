<?php

namespace Factory ;

class Circle implements Form {

    private array $params;

    public function __construct(array $params){
        $this->params = $params ;
    }

    public function draw(): void {
        $radius = null ;
        if( count( $this->params ) > 0 ) {$radius = $this->params[0] ; } ;

        print_r("draw circle, radius : $radius \n");
    }
}