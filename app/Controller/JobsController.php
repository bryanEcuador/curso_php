<?php
namespace App\Controller;

use app\model\Jobs;

class JobsController 
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

        include '../View/addJob.php';
    }
}
