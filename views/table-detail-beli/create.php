<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableDetailBeli $model */

$this->title = 'Create_Table_Detail_Beli';
$this->params['breadcrumbs'][] = ['label' => 'Table Detail Belis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table_detail_beli_create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
