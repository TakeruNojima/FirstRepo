<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableDetailBeli $model */

$this->title = 'Update_Table_Detail_Beli: ' . $model->id_detail_beli;
$this->params['breadcrumbs'][] = ['label' => 'Table Detail Belis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail_beli, 'url' => ['view', 'id_detail_beli' => $model->id_detail_beli, 'tabel_penjualan_id_penjualan' => $model->tabel_penjualan_id_penjualan,'table_barang_id_barang' => $model->table_barang_id_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table_detail_beli_update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
