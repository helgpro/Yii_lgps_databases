<?php
/* @var $this MarkPointsController */
/* @var $model MarkPoints */

$this->breadcrumbs=array(
	'Mark Points'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список пунктов', 'url'=>array('index')),
	array('label'=>'Создание пункта', 'url'=>array('create')),
	array('label'=>'Исправить пункт', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Имена пунктов #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
                'shortname',
                'nets',
                'condsurv',
                'country',
                //'kroky',
            array('label'=>'kroky',
                        'type'=>'raw',
                        'value'=>CHtml::link(CHtml::decode($model->kroky)),
             ),
                'description'
	),
)); ?>
