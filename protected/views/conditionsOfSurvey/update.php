<?php
/* @var $this ConditionsOfSurveyController */
/* @var $model ConditionsOfSurvey */

$this->breadcrumbs=array(
	'Режим измерения'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Исправить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Update ConditionsOfSurvey <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>