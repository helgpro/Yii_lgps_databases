<?php
/* @var $this MarkPointsController */
/* @var $model MarkPoints */

$this->breadcrumbs=array(
	'Mark Points'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MarkPoints', 'url'=>array('index')),
	array('label'=>'Create MarkPoints', 'url'=>array('create')),
	array('label'=>'View MarkPoints', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MarkPoints', 'url'=>array('admin')),
);
?>

<h1>Update MarkPoints <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>