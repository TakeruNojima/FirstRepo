<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TableBarang $model */

$this->title = $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Table Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="table-barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_barang' => $model->id_barang, 'tabel_pemasok_id_pemasok' => $model->tabel_pemasok_id_pemasok], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_barang' => $model->id_barang, 'tabel_pemasok_id_pemasok' => $model->tabel_pemasok_id_pemasok], [
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
            'id_barang',
            'jenis_barang',
            'nama_barang',
            'harga_barang',
            'tabel_pemasok_id_pemasok',
        ],
    ]) ?>

</div>
