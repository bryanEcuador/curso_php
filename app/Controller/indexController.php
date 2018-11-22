<?php 

namespace App\Controller;
 
use app\model\Jobs;
use app\model\Information;
use app\model\Proyect;
use app\model\Tecnologie;
use app\model\Technologie;



class IndexController {
    
     public function indexAction()
    {
        $infomation = Information::all();
        $job = Jobs::all();
        $tecnologies = Technologie::all();
        $proyects = Proyect::all();
        
        
        
    //\dd($infomation);
        
        //foreach ($job as $jobs) {
        //echo  $jobs->title;
        //echo "<br>";
       // }
    //    include '../View/index.php';
    }
}
