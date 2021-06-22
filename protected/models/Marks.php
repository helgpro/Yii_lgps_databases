<?php

/**
 * This is the model class for table "marks".
 *
 * The followings are the available columns in table 'marks':
 * @property integer $id
 * @property integer $marker_id
 * @property integer $points_id
 * @property integer $net_id
 * @property string $year_of_installation
 * @property string $year_of_destruction
 * @property integer $typeofground_id
 * @property integer $typeoffoundation_id
 * @property integer $typeoffastening_id
 * @property integer $conditionsofsurvey_id
 * @property double $latitude_n
 * @property double $longitude_e
 * @property double $altitude_h
 * @property string $meas_first
 * @property string $meas_last
 * @property integer $meas_count
 * @property integer $meas_period_days
 * @property integer $country
 * @property string $kroki
 * @property string $id_user
 */
class Marks extends CActiveRecord
{
        public $markName_search;//новое свойство для поиска
        public $markReg_Search;
       // public $mark;
        //public $regSearch;//новое свойство для поиска
        public $CounS;//новое свойство для поиска
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marks';
	}
        
        
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marker_id, points_id, net_id, year_of_installation, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, id_user', 'required'),
			array('marker_id, points_id, net_id, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, meas_count, meas_period_days, country', 'numerical', 'integerOnly'=>true),
			array('latitude_n, longitude_e, altitude_h', 'numerical'),
			array('year_of_installation, year_of_destruction', 'length', 'max'=>4),
			array('kroki', 'length', 'max'=>100),
			array('id_user', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, CounS, markName_search, markReg_Search, marker_id, points_id, net_id, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, id_user', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                     'mark'=> array(self::BELONGS_TO, 'MarkNams', 'marker_id'),
                     //'markreg'=>array(self::BELONGS_TO, 'MarkReg', 'markReg_id'),
                     'points'=>array( self::BELONGS_TO, 'MarkPoints', 'points_id' ),
                     'markreg'=>array(self::BELONGS_TO, 'MarkPoints', 'points_id'),
                    //'markreg'=>array(self::BELONGS_TO, 'MarkPoints', 'marker_id'),
                   // 'many'=>array(self::MANY_MANY, 'MarkReg','tb_Marks_Reg(marker_id, markReg_id)'),
                    //'regeon'=>array(self::BELONGS_TO, 'MarkReg', 'markReg_id'),
                   // 'nets'=>array(self::BELONGS_TO, 'Nets', 'net_id'),
                   // 'typground'=>array(self::BELONGS_TO, 'TypesOfGround', 'typeofground_id'),
                   // 'typfoundat'=>array(self::BELONGS_TO, 'TypesOfFoundation', 'typeoffoundation_id'),
                   // 'typfast'=>array(self::BELONGS_TO, 'TypesOfFastening', 'typeoffastening_id'),
                   // 'condsurv'=>array(self::BELONGS_TO, 'ConditionsOfSurvey', 'conditionsofsurvey_id'),
                    'countris'=>array(self::BELONGS_TO, 'Countries', 'country'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'marker_id' => 'Марка',
			'points_id' => 'Пункт',
			'net_id' => 'Сеть',
			'year_of_installation' => 'Год закладки',
			'year_of_destruction' => 'Год разруш',
			'typeofground_id' => 'Грунт',
			'typeoffoundation_id' => 'Тип основания',
			'typeoffastening_id' => 'Конструкция',
			'conditionsofsurvey_id' => 'Режим изм',
			'latitude_n' => 'Коорд N',
			'longitude_e' => 'Коорд E',
			'altitude_h' => 'Коорд H',
			'meas_first' => 'Первое изм',
			'meas_last' => 'Послед изм',
			'meas_count' => 'кол-во изм',
			'meas_period_days' => 'Интервал',
			'country' => 'Страна',
			'kroki' => 'Кроки',
			'id_user' => 'оператор',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.$marReg_search

	       $criteria=new CDbCriteria;
               $criteria->with = array(
                                     'mark'=>array('select'=>'mark.markers_name'),
                                     'countris'=>array('select'=>'countris.name'),
                                     'markreg'=>array('select'=>'points.name'),
                );
               //$criteria->with = array('countris'=>array('select'=>'countris.name'));
               $criteria->compare( 'countris.name', $this->CounS, true );//искать м моделе марок и передавать в новое свойство
               $criteria->compare('mark.markers_name',$this->markName_search,true);
               $criteria->compare('points.name', $this->markReg_Search, true);                  //  $criteria->with = array('reg'=>array('select'=>'reg.name'));
              //  
                                  // 
                                  // $criteria->compare('region.name',$this->reg_Search,true);
                $criteria->together=true;
                                  //  $criteria->with=array('regeon'); 
                                  //  $criteria->compare('markReg_id',$this->ma_id);
               
           
		$criteria->compare('t.id',$this->id);
               // $criteria->compare('points_id',$this->points_id);
               // $criteria->compare('marker_id',$this->marker_id);
               //$criteria->compare('mark.markers_name',$this->markName_search);
		//$criteria->compare('markReg_id',$this->markReg_id);
		$criteria->compare('net_id',$this->net_id);
		$criteria->compare('year_of_installation',$this->year_of_installation,true);
		$criteria->compare('year_of_destruction',$this->year_of_destruction,true);
		$criteria->compare('typeofground_id',$this->typeofground_id);
		$criteria->compare('typeoffoundation_id',$this->typeoffoundation_id);
		$criteria->compare('typeoffastening_id',$this->typeoffastening_id);
		$criteria->compare('conditionsofsurvey_id',$this->conditionsofsurvey_id);
		$criteria->compare('latitude_n',$this->latitude_n);
		$criteria->compare('longitude_e',$this->longitude_e);
		$criteria->compare('altitude_h',$this->altitude_h);
		$criteria->compare('meas_first',$this->meas_first,true);
		$criteria->compare('meas_last',$this->meas_last,true);
		$criteria->compare('meas_count',$this->meas_count);
		$criteria->compare('meas_period_days',$this->meas_period_days);
		$criteria->compare('country',$this->country);
		$criteria->compare('kroki',$this->kroki,true);
		$criteria->compare('id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pagesize'=>100),
                    
                                'sort'=>array(
                                         'attributes'=>array(
                                                         'CounS'=>array(
                                                             'asc'=>'countris.name',
                                                             'desc'=>'countris.name DESC',
                                                         ),
                                                          'markName_search'=>array(
                                                             'asc'=>'mark.markers_name',
                                                             'desc'=>'mark.markers_name DESC',
                                                         ),
                                                          'markReg_Search'=>array(
                                                             'asc'=>'markreg.name',
                                                             'desc'=>'markreg.name DESC',
                                                         ),
                                           
                                             '*',
                                         ),
                                     ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
         public static function all(){
            $models = self::model()->findAll();
            return CHtml::listData($models,'id','name');
                
        }
}
