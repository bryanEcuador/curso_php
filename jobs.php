<?php
require_once('vendor/autoload.php');
use  app\model\Information;


$user1 = new Information("Bryan");
$user1->apellidos = "Silva";
$user1->profesion = "PHP Developer";
$user1->correo = "bryansilva021@hotmail.com";
$user1->celular = "0990916466";
$user1->linkedin = "https://www.linkedin.com/in/bryan-silva-mercado-745b77151/";
$user1->twitter = "@bryant_silva_";


echo $user1->getLinkTwitter();
echo $user1->printName();

 function tiempo($meses) {
    if($meses > 12){
        $year = floor($meses / 12);
        $meses = $meses % 12;
            if($meses == 1) {
                   return $year." año ".$meses." mes" ;
            } else {
                    return $year." año ".$meses." meses" ;
            }
    }else if( $meses == 12) {
        return "1 año";
    } else {
        $meses == 1 ? "1 mes" : $meses." meses";
        return $meses;
    }
    
    
} 


$informacion = [
                "nombre" => "Bryan",
                "apellidos" => "Silva Mercado",
                "profesion" => "PHP Developer",
                "correo" => "bryansilva021@hotmail.com",
                "celular" => "0990916466",
                "linkedin" => "https://www.linkedin.com/in/bryan-silva-mercado-745b77151/", 
                "twitter" => "@bryant_silva_"   
            ];
$skill = [
            "Backend" => ["PHP"],
            "Frontend" => ["HTML","CSS"],
            "Frameworks" => ["Laravel","Bootstrap","Vue"]
        ];

 $languages = ["Spanish","English"];       

$works = [

            "PHP Developer" => [ "Descripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                                 "Achievements" => ["tarea 1" ,"Tarea 2" , "tarea 3"],
                                 "time" => 12
                                ],
            "Pasante"      =>  ["Descripcion" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                                 "Achievements" => ["tarea 1" ,"Tarea 2" , "tarea 3"],
                                 "time" => 15]                                      
            
            ];        
$proyect = [
                "laravel-vue" => [ 
                                    "Descripcion" => "proyecto de un mini sistema de ventas con laravel y vue",
                                    "tecnologias" => ["PHP","LARAVEL","JS","VUE","CSS","HTML"]
                                ],
                 "Comercio electronico" => [ 
                                    "Descripcion" => "Tienda de venta de productos",
                                    "tecnologias" => ["PHP","LARAVEL","JS","VUE","CSS","HTML"]
                                ],                
            ];

$carrrer = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                 in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident,
                   sunt in culpa qui officia deserunt mollit anim id est laborum. 
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                     reprehenderit in voluptate velit esse cillum dolore eu fugiat
                      nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                      sunt in culpa qui officia deserunt mollit anim id est laborum.";            

?>