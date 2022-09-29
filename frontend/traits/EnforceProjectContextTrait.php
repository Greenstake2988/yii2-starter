<?php
namespace frontend\traits;

use frontend\models\Project;
use yii\web\ForbiddenHttpException;



trait EnforceProjectContextTrait
{
   public function loadProject($project_id)
   {
      if (($model = Project::findOne($project_id)) !== null) {
         return $model;
      } else {
	      throw new ForbiddenHttpException('Selecciona un proyecto existente.');
      }
   }
}
