<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IlandTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iland-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator_name')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
