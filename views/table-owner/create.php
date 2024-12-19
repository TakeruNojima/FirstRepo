<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableOwner $model */

$this->title = 'Create Table Owner';
$this->params['breadcrumbs'][] = ['label' => 'Table Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-owner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
