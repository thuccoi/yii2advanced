<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace common\controllers;

use yii\web\Controller;

class SharedController extends Controller{
    public function actionIndex() {
         return $this->render('@common/views/shared/index');
    }
    
}
