<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Telaatkomers $model */

$this->title = 'Create Telaatkomers';
$this->params['breadcrumbs'][] = ['label' => 'Telaatkomers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telaatkomers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
