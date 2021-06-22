<?php
/* @var $this MeasureFaultController */
/* @var $model MeasureFault */

$this->breadcrumbs=array(
	'Неудавшиеся измерения '=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#measure-fault-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление</h1>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'measure-fault-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'marker_site',
		'date',
               // 'date_e',
              //  'count',
		//'tour',
          
            array( 'name'=>'tour', 'value'=>'$data->tou_r->name', 'filter' => Tours::all() ),
		//'operator',
            array( 'name'=>'operator', 'value'=>'$data->operato_r->name' , 'filter' => Operators::all()),
		'reason',
		/*
		'id_user',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php echo CHtml::button('Export', array('id'=>'export-button','class'=>'span-3 button')); ?>