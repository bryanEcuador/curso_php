<?php
namespace App\Controller;

use app\model\Jobs;
use app\Controller\BaseController;

class JobsController extends BaseController  
{
    public function addJob($request)
    {
          var_dump($request->getMethod());     
        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $job = new Jobs();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->months = 1;
            $job->state = 1;
            $job->save();
        }

        echo $this->renderHtml('addJob.twig');
       
    }
}
