<?php
/**
 * Created by PhpStorm.
 * User: Volk
 * Date: 14.03.2019
 * Time: 22:43
 */

namespace app\controllers;


class FirstController extends AppController
{
    public function actionIndex($id = null){
        $fk = 'WTF?!';
        $numbers = [1,2,3];

        if (!$id) $id = 'id GET пустой';

        return $this->render('index', ['hi'=>$fk, 'numbers'=>$numbers , 'id'=>$id] );
    }

    public function actionPubArticle(){
        return 'TEXT';
    }

}