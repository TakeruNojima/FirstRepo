<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TableDetailBeli $model */

$this->title = $model->id_detail_beli;
$this->params['breadcrumbs'][] = ['label' => 'Table_Detail_Belis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="table_detail_beli_view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_detail_beli' => $model->id_detail_beli, 'tabel_penjualan_id_penjualan' => $model->tabel_penjualan_id_penjualan,'table_barang_id_barang' => $model->table_barang_id_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_detail_beli' => $model->id_detail_beli, 'tabel_penjualan_id_penjualan' => $model->tabel_penjualan_id_penjualan, 'table_barang_id_barang' => $model->table_barang_id_barang], [
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
            'nama_barang',
            'jumlah_barang',
            'harga_barang',
            'id_detail_beli',
            'tabel_penjualan_id_penjualan',
            'table_barang_id_barang',
        ],
    ]) ?>

</div>
