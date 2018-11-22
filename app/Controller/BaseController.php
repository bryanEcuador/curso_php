<?php

namespace App\Controller;

class BaseController 
{
    protected $templateEngine;
    
    public function __construct(Type $var = null)
    {
        $loader = new \Twig_Loader_Filesystem('../View');

        $this->templateEngine = new \Twig_Environment($loader, array(
            'debug' => true ,       
            'cache' => false,
                    ));
    }

    public function renderHtml($fileName , $data = [])
    {
        return $this->templateEngine->render($fileName , $data);
    }

}
