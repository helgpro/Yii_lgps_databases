<?php
/* @var $this Receivers2Controller */
/* @var $model Receivers2 */

$this->breadcrumbs=array(
	'Receivers2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Receivers2', 'url'=>array('index')),
	array('label'=>'Create Receivers2', 'url'=>array('create')),
	array('label'=>'View Receivers2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Receivers2', 'url'=>array('admin')),
);
?>

<h1>Update Receivers2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>