<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableBarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <?= $form->field($model, 'jenis_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_barang')->textInput() ?>

    <?= $form->field($model, 'tabel_pemasok_id_pemasok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
