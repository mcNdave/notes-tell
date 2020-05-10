<?php

namespace Notes\Tell\Annotation;

class Language implements \Notes\Annotation {

    public string $key;
    
    public function __construct(? string $key = null) 
    {
        if ( $key !== null ) {
            $this->key = $key;        
        }
        
    }
    
}
