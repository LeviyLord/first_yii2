<?php
/**
 * Created by PhpStorm.
 * User: Volk
 * Date: 14.03.2019
 * Time: 23:30
 */
namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex($id=null){
        $names=['hitler', 'breavik', 'putin'];

        return $this->render('index', compact('id', 'names'));
    }
}