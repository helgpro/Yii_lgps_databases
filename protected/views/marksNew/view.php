<?php
/* @var $this MarksNewController */
/* @var $model MarksNew */

$this->breadcrumbs=array(
	'Marks News'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MarksNew', 'url'=>array('index')),
	array('label'=>'Create MarksNew', 'url'=>array('create')),
	array('label'=>'Update MarksNew', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MarksNew', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarksNew', 'url'=>array('admin')),
);
?>

<h1>View MarksNew #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array('name'=>'shortname','value'=>$model->mark->markers_name),
		'name',
		//'shortname',
		'mainMark',
		'nets',
		'year_of_installation',
		'year_of_destruction',
		
		//'marker_id',
		//'points_id',
            //array('name'=>'points_id','value'=>$model->points->name),
            //array('name'=>'net_id','value'=>$model->nets->name),
            array('name'=>'typeofground_id','value'=>$model->tyoGr->name),
            array('name'=>'typeoffoundation_id','value'=>$model->typOfOund->name),
            array('name'=>'typeoffastening_id','value'=>$model->tOfAs->name),
            //array('name'=>'conditionsofsurvey_id','value'=>$model->cond->name),
		'conditionsofsurvey',
		'latitude_n',
		'longitude_e',
		'altitude_h',
		'meas_first',
		'meas_last',
		'meas_count',
		'meas_period_days',
		'country',
		'kroki',
		'description',
	),
)); ?>
