<?php
/* @var $this TypesOfFasteningController */
/* @var $model TypesOfFastening */

$this->breadcrumbs=array(
	'Types Of Fastenings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TypesOfFastening', 'url'=>array('index')),
	array('label'=>'Create TypesOfFastening', 'url'=>array('create')),
	array('label'=>'Update TypesOfFastening', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypesOfFastening', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypesOfFastening', 'url'=>array('admin')),
);
?>

<h1>View TypesOfFastening #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'id_user',
	),
)); ?>
