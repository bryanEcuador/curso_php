<?php
namespace app\Controller;

use app\Controller\BaseController;
use app\model\User;
use Zend\Diactoros\Response\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AuthController extends BaseController 
{
   public function getLogin(){
        
    return $this->renderHtml('login.twig');

   }

   public function postLogin($request){
        $responseMessage = null;
       $postData = $request->getParsedBody();
        $user = User::where('user',$postData['user'])->first();
        if($user){
            if(\password_verify($postData['pass'],$user->password)){
                $_SESSION['userId'] = $user->id;
               return new RedirectResponse('/proyectos/admin');
            }else {
                $responseMessage = "Error en la autenfificación del usuario revise sus credenciales";
            }
        }else{
            $responseMessage =  "Error en la autenfificación del usuario revise sus credenciales";
        }

        return $this->renderHtml('login.twig', [
            'responseMessage' => $responseMessage
        ]);
   }

   public function getLogout(){
       unset($_SESSION['userId']);
        return new RedirectResponse('/proyectos/login');
   }
}
