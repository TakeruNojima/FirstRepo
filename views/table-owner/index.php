<?php

use app\models\TableOwner;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TableOwnerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Table Owners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-owner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Table Owner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_owner',
            'alamat',
            'nama_owner',
            'nomer_hp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TableOwner $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_owner' => $model->id_owner]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
