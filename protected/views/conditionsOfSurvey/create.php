<?php
/* @var $this ConditionsOfSurveyController */
/* @var $model ConditionsOfSurvey */

$this->breadcrumbs=array(
	'Режим Измерения'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>