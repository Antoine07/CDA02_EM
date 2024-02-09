<?php

namespace Factory;

class Square implements Form
{
    private array $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function draw(): void
    {
        $w = null ;
        if( count( $this->params ) > 0 ) {$w = $this->params[0] ; } ;
        print_r("draw square, w : $w \n");
    }
}
