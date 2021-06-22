<?php
/* @var $this MarkersDistancesController */
/* @var $model MarkersDistances */

$this->breadcrumbs=array(
	'Markers Distances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MarkersDistances', 'url'=>array('index')),
	array('label'=>'Create MarkersDistances', 'url'=>array('create')),
	array('label'=>'View MarkersDistances', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MarkersDistances', 'url'=>array('admin')),
);
?>

<h1>Update MarkersDistances <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>