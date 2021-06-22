<?php
/* @var $this TripsMarksController */
/* @var $model TripsMarks */

$this->breadcrumbs=array(
	'Trips Marks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TripsMarks', 'url'=>array('index')),
	array('label'=>'Manage TripsMarks', 'url'=>array('admin')),
);
?>

<h1>Create TripsMarks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>