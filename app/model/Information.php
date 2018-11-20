<?php 
Namespace app\model;

require_once('vendor/autoload.php');
use app\model\{BaseElement,PrintName};
//require_once('app/model/BaseElement.php');
//require_once('app/model/PrintName.php');
class Information extends BaseElement implements PrintName {
    public function getLinkTwitter(){
        $twitter = parent::getLinkTwitter();
        return "Twitter: ".$twitter;
    }

    public function printName(){
        return $this->nombre." ".$this->apellidos;
    }
}