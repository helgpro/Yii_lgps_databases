<?php
/* @var $this TypesOfAntennaPositionController */
/* @var $model TypesOfAntennaPosition */

$this->breadcrumbs=array(
	'Types Of Antenna Positions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypesOfAntennaPosition', 'url'=>array('index')),
	array('label'=>'Create TypesOfAntennaPosition', 'url'=>array('create')),
	array('label'=>'View TypesOfAntennaPosition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypesOfAntennaPosition', 'url'=>array('admin')),
);
?>

<h1>Update TypesOfAntennaPosition <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>