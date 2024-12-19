<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TabelPenjualan $model */

$this->title = $model->id_penjualan;
$this->params['breadcrumbs'][] = ['label' => 'Tabel Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tabel-penjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_penjualan' => $model->id_penjualan, 'table_pembeli_id_pembeli' => $model->table_pembeli_id_pembeli, 'table_owner_id_owner' => $model->table_owner_id_owner], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_penjualan' => $model->id_penjualan, 'table_pembeli_id_pembeli' => $model->table_pembeli_id_pembeli, 'table_owner_id_owner' => $model->table_owner_id_owner], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_penjualan',
            'jumlah_barang',
            'total_transaksi',
            'tanggal_transaksi',
            'table pembeli_id_pembeli',
            'table owner_id_owner',
        ],
    ]) ?>

</div>
