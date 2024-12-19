<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TablePembeli $model */

$this->title = 'Create Table Pembeli';
$this->params['breadcrumbs'][] = ['label' => 'Table Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-pembeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
