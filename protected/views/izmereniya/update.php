<?php
/* @var $this IzmereniyaController */
/* @var $model Izmereniya */

$this->breadcrumbs=array(
	'Izmereniyas'=>array('index'),
	$model->measurement_id=>array('view','id'=>$model->measurement_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Izmereniya', 'url'=>array('index')),
	array('label'=>'Create Izmereniya', 'url'=>array('create')),
	array('label'=>'View Izmereniya', 'url'=>array('view', 'id'=>$model->measurement_id)),
	array('label'=>'Manage Izmereniya', 'url'=>array('admin')),
);
?>

<h1>Update Izmereniya <?php echo $model->measurement_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>