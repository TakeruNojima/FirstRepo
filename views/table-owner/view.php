<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TableOwner $model */

$this->title = $model->id_owner;
$this->params['breadcrumbs'][] = ['label' => 'Table Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="table-owner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_owner' => $model->id_owner], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_owner' => $model->id_owner], [
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
            'id_owner',
            'alamat',
            'nama_owner',
            'nomer_hp',
        ],
    ]) ?>

</div>
