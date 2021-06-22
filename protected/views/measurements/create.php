<?php
/* @var $this MeasurementsController */
/* @var $model Measurements */

$this->breadcrumbs=array(
	'Измерения'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управления', 'url'=>array('admin')),
);
?>

<h1>Измерения</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>