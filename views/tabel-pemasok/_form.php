<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TabelPemasok $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tabel-pemasok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pemasok')->textInput() ?>

    <?= $form->field($model, 'nama_pemasok')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
