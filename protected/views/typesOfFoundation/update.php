<?php
/* @var $this TypesOfFoundationController */
/* @var $model TypesOfFoundation */

$this->breadcrumbs=array(
	'Types Of Foundations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypesOfFoundation', 'url'=>array('index')),
	array('label'=>'Create TypesOfFoundation', 'url'=>array('create')),
	array('label'=>'View TypesOfFoundation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypesOfFoundation', 'url'=>array('admin')),
);
?>

<h1>Update TypesOfFoundation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>