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
class Mark extends CActiveRecord
{
     public $Count;
     public $markName_search;//новое свойство для поиска
     public $markPoint_Search;
     public $net_Search;
     public $tyoGr_Search;
     public $tOfAs_Search;
     public $typOfOund_Search;
     public $cond_Search;
     public $Countries;
     
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
			array('marker_id, points_id, net_id, typeofground_id, typeoffastening_id, conditionsofsurvey_id, country ', 'required'),
                        array('net_id, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, id_user','safe'),
			//array('points_id, net_id, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, meas_count, meas_period_days, country', 'numerical', 'integerOnly'=>true),
			//array('latitude_n, longitude_e, altitude_h', 'numerical'),
			//array('year_of_installation, year_of_destruction', 'length', 'max'=>4),
			//array('kroki', 'length', 'max'=>100),
			//array('id_user', 'length', 'max'=>30),
                        array('marker_id','validM'),
                        array('points_id','validP'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marker_id,markName_search, markPoint_Search, Countries,net_Search,tyoGr_Search, tOfAs_Search, typOfOund_Search,cond_Search, points_id, net_id, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey_id, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, id_user', 'safe', 'on'=>'search'),
		);
	}
        
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
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'mark'=> array(self::BELONGS_TO, 'MarkNams', 'marker_id'),
                    'points'=>array( self::BELONGS_TO, 'MarkPoints', 'points_id' ),
                    'countris'=>array(self::BELONGS_TO, 'Countries', 'country'),
                    'nets'=>array(self::BELONGS_TO, 'Nets', 'net_id'),
                    'tyoGr'=>array(self::BELONGS_TO, 'TypesOfGround', 'typeofground_id'),
                    'tOfAs'=>array(self::BELONGS_TO, 'TypesOfFastening', 'typeoffastening_id'),
                    'typOfOund'=>array(self::BELONGS_TO, 'TypesOfFoundation', 'typeoffoundation_id'),
                    'cond'=>array(self::BELONGS_TO, 'ConditionsOfSurvey', 'conditionsofsurvey_id'),
                   
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'markName_search' => 'Марка',
			'markPoint_Search' => 'Пункт',
			'net_id' => 'Сеть',
			'year_of_installation' => 'Год закладки',
			'year_of_destruction' => 'Год разрушения',
			'typeofground_id' => 'Тип грунта',
			'typeoffoundation_id' => 'тип основания',
			'typeoffastening_id' => 'тип конструкции',
			'conditionsofsurvey_id' => 'режим измер',
			'latitude_n' => 'коорд X',
			'longitude_e' => 'коорд Y',
			'altitude_h' => 'высота',
			'meas_first' => 'первое измер',
			'meas_last' => 'Послед измер',
			'meas_count' => 'кол измер',
			'meas_period_days' => 'период',
			'country' => 'Страна',
			'kroki' => 'кроки',
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
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                
                $criteria->with = array(
                                     'mark'=>array('select'=>'mark.markers_name'),
                                     'countris'=>array('select'=>'countris.name'),
                                     'points'=>array('select'=>'points.name'),
                                   
                );
       
               $criteria->compare('mark.markers_name',$this->markName_search,true);
               $criteria->compare('points.name', $this->markPoint_Search, true);                  //  $criteria->with = array('reg'=>array('select'=>'reg.name'));
               $criteria->compare('countris.name', $this->Countries, true); 
               //  $meas_table = Measurements::model()->tableName();
           
                // $meas_count_sql = "(select count(*) from $meas_table  where markerName_id = $this->marker_id )";
               // $cooun = Measurements::model()->countBySql('SELECT COUNT( * ) FROM  `measurements` WHERE  `markerName_id` =394');
               //   $num =$this->marker_id;
               // $cooun = Measurements::model()->countBySql('SELECT COUNT( * ) FROM  `measurements` WHERE  `markerName_id` =:num',array(':num'=>$num));
                
		$criteria->compare('t.id',$this->id);
		//$criteria->compare('rrrer',$this->CounS);
		//$criteria->compare('points_id',$this->points_id);
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
		//$criteria->compare('country',$this->country);
		$criteria->compare('kroki',$this->kroki,true);
		$criteria->compare('t.id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                    
                        'pagination'=>array('pagesize'=>100),
                    
                    'sort'=>array(
                                         'attributes'=>array(
                                                        
                                                          'markName_search'=>array(
                                                             'asc'=>'mark.markers_name',
                                                             'desc'=>'mark.markers_name DESC',
                                                         ),
                                                          'markPoint_Search'=>array(
                                                             'asc'=>'markreg.name',
                                                             'desc'=>'markreg.name DESC',
                                                         ),
                                                         'Countries' => array(
                                                                'asc' => 'countris.name ',
                                                                'desc' => 'countris.name DESC',
                                                             ),
                                           
                                             '*',
                                         ),
                        
                                     ),
                    
		)
                        );
	}

        
         protected function beforeSave()
            {
                if(parent::beforeSave())
                {
                 //   if($this->isNewRecord)
                 //   {
                        $modeMN =MarkNams::model()->findByAttributes(array('markers_name'=>$this->marker_id));
                        $modePN =MarkPoints::model()->findByAttributes(array('name'=>$this->points_id));
                        if($modeMN and $modePN ){
                        $this->marker_id =$modeMN->id;
                        $this->points_id =$modePN->id;
                     //   $this->b_date = date('Y-m-d', strtotime($this->b_date));//strtotime($this->date_start);
                     //   $this->e_date = date('Y-m-d', strtotime($this->e_date));//strtotime($this->date_start);
                         return true;
                        }
                        else return false;
                  //  }
                    
                 
                }
                
            }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mark the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
       // public static function count(){
            
      //  }
        public static function CountAll(){
          //  $models = self::model()->findAll();
           //  $count = OfferDetail::model()->count($criteria);
           // return CHtml::listData($models,'id','markers_name');
             
            
        }
     
}
