<?php
/* @var $this Receivers2Controller */
/* @var $model Receivers2 */

$this->breadcrumbs=array(
	'Receivers2s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Receivers2', 'url'=>array('index')),
	array('label'=>'Create Receivers2', 'url'=>array('create')),
	array('label'=>'Update Receivers2', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Receivers2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receivers2', 'url'=>array('admin')),
);
?>

<h1>View Receivers2 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'set',
		'igs_code',
		'serial_num',
		'id_user',
	),
)); ?>
