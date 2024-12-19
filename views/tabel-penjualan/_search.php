<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TabelPenjualanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tabel-penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_penjualan') ?>

    <?= $form->field($model, 'jumlah_barang') ?>

    <?= $form->field($model, 'total_transaksi') ?>

    <?= $form->field($model, 'tanggal_transaksi') ?>

    <?= $form->field($model, 'table_pembeli_id_pembeli') ?>

    <?php // echo $form->field($model, 'table owner_id_owner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
