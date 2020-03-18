<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IlandTable */

$this->title = 'Update Iland Table: ' . $model->table_name;
$this->params['breadcrumbs'][] = ['label' => 'Iland Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->table_name, 'url' => ['view', 'id' => $model->table_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="iland-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
