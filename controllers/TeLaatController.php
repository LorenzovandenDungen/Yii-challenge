<?php

namespace app\controllers;

use Yii;
use app\models\Telaat;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TelaatController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Telaat::find(),
        ]);

        return $this->render('index', [
           

                       
            