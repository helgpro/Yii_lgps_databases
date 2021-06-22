<?php
/* @var $this TypesOfAntennaPositionController */
/* @var $model TypesOfAntennaPosition */

$this->breadcrumbs=array(
	'Types Of Antenna Positions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypesOfAntennaPosition', 'url'=>array('index')),
	array('label'=>'Manage TypesOfAntennaPosition', 'url'=>array('admin')),
);
?>

<h1>Create TypesOfAntennaPosition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>