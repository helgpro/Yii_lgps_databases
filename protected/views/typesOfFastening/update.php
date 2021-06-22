<?php
/* @var $this TypesOfFasteningController */
/* @var $model TypesOfFastening */

$this->breadcrumbs=array(
	'Types Of Fastenings'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypesOfFastening', 'url'=>array('index')),
	array('label'=>'Create TypesOfFastening', 'url'=>array('create')),
	array('label'=>'View TypesOfFastening', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypesOfFastening', 'url'=>array('admin')),
);
?>

<h1>Update TypesOfFastening <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>