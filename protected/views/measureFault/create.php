<?php
/* @var $this MeasureFaultController */
/* @var $model MeasureFault */

$this->breadcrumbs=array(
	'Неудавшиеся измерения'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создание </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>