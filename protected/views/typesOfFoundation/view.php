<?php
/* @var $this TypesOfFoundationController */
/* @var $model TypesOfFoundation */

$this->breadcrumbs=array(
	'Types Of Foundations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TypesOfFoundation', 'url'=>array('index')),
	array('label'=>'Create TypesOfFoundation', 'url'=>array('create')),
	array('label'=>'Update TypesOfFoundation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypesOfFoundation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypesOfFoundation', 'url'=>array('admin')),
);
?>

<h1>View TypesOfFoundation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'id_user',
	),
)); ?>
