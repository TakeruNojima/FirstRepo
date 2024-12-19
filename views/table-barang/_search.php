<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableBarangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'jenis_barang') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'harga_barang') ?>

    <?= $form->field($model, 'tabel_pemasok_id_pemasok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
