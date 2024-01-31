<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Telaatkomers $model */

$this->title = 'Update Telaatkomers: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Telaatkomers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telaatkomers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
