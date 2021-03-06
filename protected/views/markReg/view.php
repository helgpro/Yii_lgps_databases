<?php
/* @var $this MarkRegController */
/* @var $model MarkReg */

$this->breadcrumbs=array(
	'Mark Regs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MarkReg', 'url'=>array('index')),
	array('label'=>'Create MarkReg', 'url'=>array('create')),
	array('label'=>'Update MarkReg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MarkReg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarkReg', 'url'=>array('admin')),
);
?>

<h1>View MarkReg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'markname_id',
	),
)); ?>
