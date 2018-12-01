<?php
namespace app\Controller;

use app\Controller\BaseController;
use app\model\User;

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
                $responseMessage =  'Usuario autentificado con exito';   
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
}
