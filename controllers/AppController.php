<?php
/**
 * Created by PhpStorm.
 * User: Volk
 * Date: 15.03.2019
 * Time: 20:45
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }

}
