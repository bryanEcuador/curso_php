<?php 

namespace App\Controller;
 
use app\model\Jobs;
use app\model\Information;
use app\model\Proyect;
use app\model\Technologie;
use app\model\Activitie;
use app\Controller\BaseController;



class IndexController extends BaseController {
    
     public function indexAction()
    {
        $infomation = Information::all();
        $job = Jobs::all();
        $tecnologies = Technologie::all();
        $proyects = Proyect::all();
        $activities = Activitie::all();
        
        
    //\dd($infomation);
        
        //foreach ($job as $jobs) {
        //echo  $jobs->title;
        //echo "<br>";
       // }
       //var_dump($infomation);
        //echo $infomation->name;        
        return $this->renderHtml('index.twig',
            [
               'informacion' => $infomation,
                'job' => $job,
                'tecnologies' => $tecnologies,
                'proyects' => $proyects,
                'activity' => $activities
            ]);
    }
}
