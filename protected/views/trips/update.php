<?php
/* @var $this TripsController */
/* @var $model Trips */

$this->breadcrumbs=array(
	'Trips'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trips', 'url'=>array('index')),
	array('label'=>'Create Trips', 'url'=>array('create')),
	array('label'=>'View Trips', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Trips', 'url'=>array('admin')),
);
?>

<h1>Update Trips <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>