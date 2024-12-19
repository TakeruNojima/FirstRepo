<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TabelPenjualan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tabel-penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_penjualan')->textInput() ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>

    <?= $form->field($model, 'total_transaksi')->textInput() ?>

    <?= $form->field($model, 'tanggal_transaksi')->textInput() ?>

    <?= $form->field($model, 'table_pembeli_id_pembeli')->textInput() ?>

    <?= $form->field($model, 'table_owner_id_owner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
