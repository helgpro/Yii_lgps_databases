<?php
/* @var $this DatabaseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Databases',
);

$this->menu=array(
	array('label'=>'Create Database', 'url'=>array('create')),
	array('label'=>'Manage Database', 'url'=>array('admin')),
);
?>

<h1>Databases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
