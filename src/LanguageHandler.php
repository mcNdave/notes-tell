<?php declare(strict_types = 1);

namespace Notes\Tell;

use Psr\Http\Message\ResponseInterface;

use Notes\ObjectResolver;

class LanguageHandler {

    public function verify(string $className) : ? \Notes\Annotation 
    {    
        $annotation = $this->getClassAnnotations($className);
        
        # Should generate an equivalent of Ulmus's object reflection here !
        if ( $annotation->key ) {
            return $annotation;
        }

        return null;
    }

    protected function getClassAnnotations(string $className) : \Notes\Annotation
    {
        $objectResolver = new ObjectResolver($className, true, true, false, true);

        if ( null !== ( $object = $objectResolver->getAnnotationFromClassname( Annotation\Language::class ) ) ) {
            return $object;
        }
    }

}
