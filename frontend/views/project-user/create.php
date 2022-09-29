<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ProjectUser $model */

$this->title = 'Create Project User';
$this->params['breadcrumbs'][] = ['label' => 'Project Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
