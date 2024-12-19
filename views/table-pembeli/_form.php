<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TablePembeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-pembeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pembeli')->textInput() ?>

    <?= $form->field($model, 'nama_pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_hp')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
