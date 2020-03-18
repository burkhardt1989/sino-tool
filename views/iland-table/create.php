<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IlandTable */

$this->title = 'Create Iland Table';
$this->params['breadcrumbs'][] = ['label' => 'Iland Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iland-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
