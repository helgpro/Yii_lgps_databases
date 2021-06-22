<?php
/* @var $this Points1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Пункты',
);

$this->menu=array(
	//array('label'=>'Create Points1', 'url'=>array('create')),
	array('label'=>'Управление Пунктвми', 'url'=>array('admin')),
);
?>

<h1>Points1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
