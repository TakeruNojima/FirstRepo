<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableOwner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-owner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_owner')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_hp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
