<?php 

namespace App\Controller;
 
use app\model\Jobs;

class IndexController {
    
     public function indexAction()
    {
        $job = Jobs::all();
        foreach ($job as $jobs) {
        echo  $jobs->title;
        }
        include '../View/index.php';
    }
}
