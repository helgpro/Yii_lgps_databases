<?php
/* @var $this MarkersDistancesController */
/* @var $model MarkersDistances */

$this->breadcrumbs=array(
	'Markers Distances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarkersDistances', 'url'=>array('index')),
	array('label'=>'Manage MarkersDistances', 'url'=>array('admin')),
);
?>

<h1>Create MarkersDistances</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>