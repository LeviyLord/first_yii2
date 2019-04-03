<?php
/**
 * Created by PhpStorm.
 * User: Volk
 * Date: 15.03.2019
 * Time: 20:50
 */

namespace app\controllers;


class PostController extends AppController
{
    public function actionTest(){
        $names=['hitler', 'breavik', 'putin'];
        $this->debug($names);
       return $this ->render('test');
    }

}