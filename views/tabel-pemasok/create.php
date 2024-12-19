<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TabelPemasok $model */

$this->title = 'Create Tabel Pemasok';
$this->params['breadcrumbs'][] = ['label' => 'Tabel Pemasoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-pemasok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
