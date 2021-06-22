<?php
/* @var $this OperatorsController */
/* @var $model Operators */

$this->breadcrumbs=array(
	'Операторы'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>