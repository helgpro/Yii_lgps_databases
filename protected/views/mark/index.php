<?php
/* @var $this MarkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Марки',
);

$this->menu=array(
	//array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Marks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
