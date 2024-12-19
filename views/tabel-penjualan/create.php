<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TabelPenjualan $model */

$this->title = 'Create Tabel Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Tabel Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
