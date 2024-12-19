<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TablePembeli $model */

$this->title = $model->id_pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Table Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="table-pembeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pembeli' => $model->id_pembeli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pembeli' => $model->id_pembeli], [
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
            'id_pembeli',
            'nama_pembeli',
            'Alamat',
            'nomer_hp',
            'email:email',
        ],
    ]) ?>

</div>
