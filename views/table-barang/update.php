<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableBarang $model */

$this->title = 'Update Table Barang: ' . $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Table Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_barang, 'url' => ['view', 'id_barang' => $model->id_barang, 'tabel_pemasok_id_pemasok' => $model->tabel_pemasok_id_pemasok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
