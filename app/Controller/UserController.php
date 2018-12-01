<?php
namespace App\Controller;

use app\model\User;
use app\Controller\BaseController;
use Respect\Validation\Validator as v;

class UserController extends BaseController
{
    public function addUser($request){
        
        $responseMessage = null;
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $userValidator =
                v::key('user', v::stringType()->notEmpty())
                ->key('pass', v::stringType()->notEmpty());


            try {
                $userValidator->assert($postData);
                $postData = $request->getParsedBody();
                $user = new User();
                $user->usuario = $postData['user'];
                $user->password = \password_hash($postData['pass'], PASSWORD_DEFAULT); 
                $user->estado = 1;
                $user->save();
                $responseMessage = 'Saved'; 
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }
        }

        return $this->renderHtml('addUser.twig', [
            'responseMessage' => $responseMessage
        ]); 


    }
}
