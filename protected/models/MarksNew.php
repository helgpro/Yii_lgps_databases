<?php

/**
 * This is the model class for table "marksNew".
 *
 * The followings are the available columns in table 'marksNew':
 * @property integer $id
 * @property string $name
 * @property string $shortname
 * @property string $mainMark
 * @property string $nets
 * @property string $year_of_installation
 * @property string $year_of_destruction
 * @property integer $typeofground_id
 * @property integer $typeoffoundation_id
 * @property integer $typeoffastening_id
 * @property string $conditionsofsurvey
 * @property double $latitude_n
 * @property double $longitude_e
 * @property double $altitude_h
 * @property string $meas_first
 * @property string $meas_last
 * @property integer $meas_count
 * @property integer $meas_period_days
 * @property string $country
 * @property string $kroki
 * @property string $description
 */
class MarksNew extends CActiveRecord
{
        //public $markName_search;//новое свойство для поиска
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marksNew';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, shortname, typeofground_id, typeoffoundation_id, typeoffastening_id', 'required'),
                     
			array('mainMark,nets, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, description','safe'),
                        //array('typeofground_id, typeoffoundation_id, typeoffastening_id, meas_count, meas_period_days', 'numerical', 'integerOnly'=>true),
			//array('latitude_n, longitude_e, altitude_h', 'numerical'),
			//array('name, country, kroki', 'length', 'max'=>100),
			//array('shortname, mainMark, year_of_installation, year_of_destruction', 'length', 'max'=>4),
			//array('nets, conditionsofsurvey', 'length', 'max'=>5),
			array('description', 'length', 'max'=>200),
                        array('name','validP'),
                        array('shortname','validM'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
	//		array('id, name, shortname, mainMark, nets, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, description', 'safe', 'on'=>'search'),
		);
	}
        // validaciya na imena punktov i marok
         public function validM($attributes,$parm )
        {
            $mark = $this->$attributes;
           $markReturn =MarkNams::model()->findByAttributes(array('markers_name'=>$mark));
         //  print_r($markReturn);
            if(!$markReturn){
            $this ->addError($attributes,'Необходимо добавить новую марку в Таблицу Имена марок Марок');
            }
        
        }
         public function validP($attributes,$parm )
        {
            $point = $this->$attributes;
           $pointReturn =  MarkPoints::model()->findByAttributes(array('name'=>$point));
         //  print_r($pointReturn);
            if(!$pointReturn){
            $this ->addError($attributes,'Необходимо добавить новый пункт в Таблицу Имена пунктов');
            }
        
        }
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
                    'mark'=> array(self::BELONGS_TO, 'MarkNams', 'shortname'),//marka
                    //'name' =>  array(self::BELONGS_TO, 'MarkNams', 'name'),
                    //'countris'=>array(self::BELONGS_TO, 'Countries', 'country'),
                    //'nets'=>array(self::BELONGS_TO, 'Nets', 'net_id'),
                    'tyoGr'=>array(self::BELONGS_TO, 'TypesOfGround', 'typeofground_id'),
                    'tOfAs'=>array(self::BELONGS_TO, 'TypesOfFastening', 'typeoffastening_id'),
                    'typOfOund'=>array(self::BELONGS_TO, 'TypesOfFoundation', 'typeoffoundation_id'),
                    //'cond'=>array(self::BELONGS_TO, 'ConditionsOfSurvey', 'conditionsofsurvey_id'),
                   
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Название',
			'shortname' => 'Марка',
			'mainMark' => 'Пункт',
			'nets' => 'Сеть',
			'year_of_installation' => 'Год устан',
			'year_of_destruction' => 'Год уничтож',
			'typeofground_id' => 'Грунт',
			'typeoffoundation_id' => 'Тип основан',
			'typeoffastening_id' => 'Конструкц',
			'conditionsofsurvey' => 'Реж изм',
			'latitude_n' => 'Кор N',
			'longitude_e' => 'Кор E',
			'altitude_h' => 'Кор H',
			'meas_first' => 'Перв изм',
			'meas_last' => 'Послед из',
			'meas_count' => 'Кол из',
			'meas_period_days' => 'Прериод дн',
			'country' => 'Страна',
			'kroki' => 'Кроки',
			'description' => 'Примечание',
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
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                 $criteria->with = array(
                                     'mark'=>array('select'=>'mark.markers_name'),
                                     'tyoGr'=>array('select'=>'tyoGr.name'),
                                     'tOfAs'=>array('select'=>'tOfAs.name'),
                                     'typOfOund'=>array('select'=>'typOfOund.name'),
                                   
                );
                 
                $criteria->compare('mark.markers_name',$this->shortname,true);
              //  $criteria->compare('tyoGr.name',$this->typeofground_id,true);
              //  $criteria->compare('tOfAs.name',$this->typeoffastening_id,true);
              //  $criteria->compare('tOfAs.name',$this->typeoffoundation_id,true);
                
                
                
		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.name',$this->name,true);
		//$criteria->compare('shortname',$this->shortname,true);
		$criteria->compare('mainMark',$this->mainMark,true);
		$criteria->compare('nets',$this->nets,true);
		$criteria->compare('year_of_installation',$this->year_of_installation,true);
		$criteria->compare('year_of_destruction',$this->year_of_destruction,true);
		//$criteria->compare('typeofground_id',$this->typeofground_id);
		//$criteria->compare('typeoffoundation_id',$this->typeoffoundation_id);
		//$criteria->compare('typeoffastening_id',$this->typeoffastening_id);
		$criteria->compare('conditionsofsurvey',$this->conditionsofsurvey,true);
		$criteria->compare('latitude_n',$this->latitude_n);
		$criteria->compare('longitude_e',$this->longitude_e);
		$criteria->compare('altitude_h',$this->altitude_h);
		$criteria->compare('meas_first',$this->meas_first,true);
		$criteria->compare('meas_last',$this->meas_last,true);
		$criteria->compare('meas_count',$this->meas_count);
		$criteria->compare('meas_period_days',$this->meas_period_days);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('kroki',$this->kroki,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        protected function beforeSave()
            {
                if(parent::beforeSave())
                {
                    //if($this->isNewRecord)            //если новая запись то update не сделать
                    //{
                        $modeMN =MarkNams::model()->findByAttributes(array('markers_name'=>$this->shortname));// марки id
                        $modePN =MarkPoints::model()->findByAttributes(array('name'=>$this->name));//Пункт
                        if($modeMN and $modePN ){
                        $this->shortname =$modeMN->id;
                        $this->name =$modePN->name;
                        $this->mainMark =$modePN->shortname;//mainmark.marksName = shortname.marksPoints
                        $this->nets =$modePN->nets;//set
                        $this->conditionsofsurvey =$modePN->condsurv;//tip izmer
                        $this->country =$modePN->country;//
                        $this->kroki =$modePN->kroky;//set
                        $this->description = $modePN->description;
                        //$this->b_date = date('Y-m-d', strtotime($this->b_date));//strtotime($this->date_start);
                        //$this->e_date = date('Y-m-d', strtotime($this->e_date));//strtotime($this->date_start);
                         return true;
                        }
                        else return false;
                    //}
                    
                 
                }
                
            }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MarksNew the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
