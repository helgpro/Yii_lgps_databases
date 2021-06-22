<?php
/* @var $this TypesOfGroundController */
/* @var $model TypesOfGround */

$this->breadcrumbs=array(
	'Тип грунта'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Create TypesOfGround</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>