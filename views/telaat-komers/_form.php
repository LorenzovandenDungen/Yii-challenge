<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Telaatkomers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="telaatkomers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datum')->textInput() ?>

    <?= $form->field($model, 'tijd')->textInput() ?>

    <?= $form->field($model, 'reden')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
