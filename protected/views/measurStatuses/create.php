<?php
/* @var $this MeasurStatusesController */
/* @var $model MeasurStatuses */

$this->breadcrumbs=array(
	'Measur Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MeasurStatuses', 'url'=>array('index')),
	array('label'=>'Manage MeasurStatuses', 'url'=>array('admin')),
);
?>

<h1>Create MeasurStatuses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>