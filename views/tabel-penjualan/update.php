<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TabelPenjualan $model */

$this->title = 'Update Tabel Penjualan: ' . $model->id_penjualan;
$this->params['breadcrumbs'][] = ['label' => 'Tabel Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penjualan, 'url' => ['view', 'id_penjualan' => $model->id_penjualan, 'table_pembeli_id_pembeli' => $model->table_pembeli_id_pembeli, 'table_owner_id_owner' => $model->table_owner_id_owner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tabel-penjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
