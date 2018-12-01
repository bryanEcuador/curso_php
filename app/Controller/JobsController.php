<?php
namespace App\Controller;

use app\model\Jobs;
use app\Controller\BaseController;
use Respect\Validation\Validator as v;

class JobsController extends BaseController  
{
    public function addJob($request)
    {
        $responseMessage = null;
        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $jobValidator =
             v::key('title', v::stringType()->notEmpty())
             ->key('description', v::stringType()->notEmpty());


             try{
                $jobValidator->assert($postData);
                $postData = $request->getParsedBody();

                $files = $request->getUploadedFiles();
                $logo = $files['logo'];

                if($logo->getError() == UPLOAD_ERR_OK){
                    $fileName = $logo->getClientFilename();
                    $logo->moveTo("uploads/$fileName");
                }
                /*
                $job = new Jobs();
                $job->title = $postData['title'];
                $job->description = $postData['description'];
                $job->months = 1;
                $job->state = 1;
                $job->save();
                $responseMessage = 'Saved'; */
             }catch(\Exception $e){
                $responseMessage = $e->getMessage();
             }
        }

        return $this->renderHtml('addJob.twig',[
                        'responseMessage' => $responseMessage
                     ]
            );
    }
}
