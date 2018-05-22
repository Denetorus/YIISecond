<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fk_user_id')->textInput() ?>

    <?= $form->field($model, 'fk_project_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
