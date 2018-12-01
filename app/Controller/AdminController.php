<?php
namespace app\Controller;

use app\Controller\BaseController;

class AdminController extends BaseController {

    public function getIndex() {
        return $this->renderHtml('admin.twig');
    }
}
