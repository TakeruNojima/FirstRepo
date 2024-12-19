<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableDetailBeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table_detail_beli_form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>

    <?= $form->field($model, 'harga_barang')->textInput() ?>

    <?= $form->field($model, 'id_detail_beli')->textInput() ?>

    <?= $form->field($model, 'tabel_penjualan_id_penjualan')->textInput() ?>

    <?= $form->field($model, 'table_barang_id_barang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
