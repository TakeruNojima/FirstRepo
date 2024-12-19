<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TabelPemasok $model */

$this->title = 'Update Tabel Pemasok: ' . $model->id_pemasok;
$this->params['breadcrumbs'][] = ['label' => 'Tabel Pemasoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pemasok, 'url' => ['view', 'id_pemasok' => $model->id_pemasok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tabel-pemasok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
