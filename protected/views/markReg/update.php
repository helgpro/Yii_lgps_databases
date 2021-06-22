<?php
/* @var $this MarkRegController */
/* @var $model MarkReg */

$this->breadcrumbs=array(
	'Mark Regs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MarkReg', 'url'=>array('index')),
	array('label'=>'Create MarkReg', 'url'=>array('create')),
	array('label'=>'View MarkReg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MarkReg', 'url'=>array('admin')),
);
?>

<h1>Update MarkReg <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>