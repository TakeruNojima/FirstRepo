<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableOwner $model */

$this->title = 'Update Table Owner: ' . $model->id_owner;
$this->params['breadcrumbs'][] = ['label' => 'Table Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_owner, 'url' => ['view', 'id_owner' => $model->id_owner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-owner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
