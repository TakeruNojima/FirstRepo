<?php

use app\models\TabelPenjualan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TabelPenjualanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tabel Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tabel Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penjualan',
            'jumlah_barang',
            'total_transaksi',
            'tanggal_transaksi',
            'table_pembeli_id_pembeli',
            //'table owner_id_owner',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TabelPenjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penjualan' => $model->id_penjualan, 'table_pembeli_id_pembeli' => $model->table_pembeli_id_pembeli, 'table_owner_id_owner' => $model->table_owner_id_owner]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
