<?php
/* @var $this TripsController */
/* @var $model Trips */

$this->breadcrumbs=array(
	'Trips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trips', 'url'=>array('index')),
	array('label'=>'Manage Trips', 'url'=>array('admin')),
);
?>

<h1>Create Trips</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>