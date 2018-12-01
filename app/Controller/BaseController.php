<?php

namespace App\Controller;
use Zend\Diactoros\Response\HtmlResponse;
use Respect\Validation\Validator as v;
class BaseController 
{
    protected $templateEngine;
    
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('../View');

        $this->templateEngine = new \Twig_Environment($loader, array(
            'debug' => true ,       
            'cache' => false,
                    ));
    }

    public function renderHtml($fileName , $data = [])
    {
        return new HtmlResponse($this->templateEngine->render($fileName, $data)); 
    }

}
