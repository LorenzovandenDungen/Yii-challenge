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

        // Fetch statistics from the database
        $sql = "SELECT MAX(id) AS hoogste, AVG(id) AS gemiddelde, COUNT(id) AS totaal FROM telaat_komers";
        $result = Yii::$app->db->createCommand($sql)->queryOne();

        $hoogste = $result['hoogste'];
        $gemiddelde = $result['gemiddelde'];
        $totaal = $result['totaal'];

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'hoogste' => $hoogste,
            'gemiddelde' => $gemiddelde,
            'totaal' => $totaal,
        ]);
    }

    // Andere actie methoden komen hier (actionView, actionCreate, actionUpdate, actionDelete)

} // einde van TelaatController klasse

?>
