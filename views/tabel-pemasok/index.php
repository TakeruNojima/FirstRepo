<?php

use app\models\TabelPemasok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TabelPemasokSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tabel Pemasoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-pemasok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tabel Pemasok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemasok',
            'nama_pemasok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TabelPemasok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pemasok' => $model->id_pemasok]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
