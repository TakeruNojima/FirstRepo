<?php

use app\models\TablePembeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TablePembeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Table Pembelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-pembeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Table Pembeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pembeli',
            'nama_pembeli',
            'Alamat',
            'nomer_hp',
            'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TablePembeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pembeli' => $model->id_pembeli]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
