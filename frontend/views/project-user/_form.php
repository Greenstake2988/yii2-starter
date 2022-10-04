<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var frontend\models\ProjectUser $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="project-user-form">

    <?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'user_id')->textInput() ?>
    
    <?= $form->field($model, 'role_id')->dropDownList($model->getRolesList(), ['prompt' => 'Select..']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
