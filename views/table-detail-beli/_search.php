<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableDetailBeliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table_detail_beli_search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'jumlah_barang') ?>

    <?= $form->field($model, 'harga_barang') ?>

    <?= $form->field($model, 'id_detail_beli') ?>

    <?= $form->field($model, 'tabel_penjualan_id_penjualan') ?>

    <?php // echo $form->field($model, 'tabel penjualan_table pembeli_id_pembeli') ?>

    <?php // echo $form->field($model, 'tabel penjualan_table owner_id_owner') ?>

    <?php // echo $form->field($model, 'table barang_id_barang') ?>

    <?php // echo $form->field($model, 'table barang_tabel pemasok_id_pemasok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
