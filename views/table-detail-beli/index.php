<?php

use app\models\TableDetailBeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\TableDetailBeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Table_Detail_Belis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table_detail_beli_index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create_Table_Detail_Beli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // Menampilkan kolom-kolom yang relevan
            'nama_barang',
            'jumlah_barang',
            'harga_barang',
            'id_detail_beli',
            'tabel_penjualan_id_penjualan',  // Perbaikan penulisan nama kolom
            //'tabel_penjualan_table_pembeli_id_pembeli', // jika tidak ingin ditampilkan, hapus atau beri komen
            //'tabel_penjualan_table_owner_id_owner', // sama seperti di atas
            //'table_barang_id_barang',
            //'table_barang_tabel_pemasok_id_pemasok',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TableDetailBeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 
                        'id_detail_beli' => $model->id_detail_beli, 
                        'tabel_penjualan_id_penjualan' => $model->tabel_penjualan_id_penjualan, 
                        'table_barang_id_barang' => $model->table_barang_id_barang, 
                    ]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
