<?php
/* @var $this MeasurStatusesController */
/* @var $model MeasurStatuses */

$this->breadcrumbs=array(
	'Measur Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MeasurStatuses', 'url'=>array('index')),
	array('label'=>'Create MeasurStatuses', 'url'=>array('create')),
	array('label'=>'View MeasurStatuses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MeasurStatuses', 'url'=>array('admin')),
);
?>

<h1>Update MeasurStatuses <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>