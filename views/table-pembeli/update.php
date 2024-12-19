<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TablePembeli $model */

$this->title = 'Update Table Pembeli: ' . $model->id_pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Table Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembeli, 'url' => ['view', 'id_pembeli' => $model->id_pembeli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-pembeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
