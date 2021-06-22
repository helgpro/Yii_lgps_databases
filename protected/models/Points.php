<?php

/**
 * This is the model class for table "points".
 *
 * The followings are the available columns in table 'points':
 * @property integer $id
 * @property string $marker_site
 * @property string $marker_name
 * @property string $net_number
 * @property string $point_marks
 * @property string $year_of_installation
 * @property string $year_of_destruction
 * @property string $type_of_ground
 * @property string $type_of_foundation
 * @property string $type_of_fastening
 * @property string $conditions_of_survey
 * @property double $longitude_e
 * @property double $latitude_n
 * @property double $altitude_h
 * @property string $country
 * @property string $kroki
 * @property string $b_date
 * @property string $e_date
 * @property integer $count
 * @property string $id_user
 */
class Points extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'points';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('', 'required'),
			array('longitude_e, latitude_n, altitude_h', 'numerical'),
			array('marker_site', 'length', 'max'=>50),
			array('marker_name, id_user', 'length', 'max'=>30),
			array('net_number', 'length', 'max'=>3),
			array('year_of_installation, year_of_destruction', 'length', 'max'=>4),
			array('conditions_of_survey', 'length', 'max'=>1),
			array('country', 'length', 'max'=>20),
			array('kroki', 'length', 'max'=>100),
                        array('marker_name, net_number, point_marks, year_of_installation, year_of_destruction, type_of_ground, type_of_foundation, type_of_fastening, conditions_of_survey, longitude_e, latitude_n, altitude_h, country, kroki, b_date, e_date, count id_user','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marker_site, marker_name, net_number, point_marks, year_of_installation, year_of_destruction, type_of_ground, type_of_foundation, type_of_fastening, conditions_of_survey, longitude_e, latitude_n, altitude_h, country, kroki, b_date, e_date, id_user', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'marker_site' => 'Марка',
			'marker_name' => 'Пункт',
			'net_number' => 'Сеть',
			'point_marks' => 'Марки',
			'year_of_installation' => 'Год установки',
			'year_of_destruction' => 'посл.разру.марк',
			'type_of_ground' => 'Грунт',
			'type_of_foundation' => 'Type Of Foundation',
			'type_of_fastening' => 'Type Of Fastening',
			'conditions_of_survey' => 'Conditions Of Survey',
			'longitude_e' => 'Longitude E',
			'latitude_n' => 'Latitude N',
			'altitude_h' => 'Altitude H',
			'country' => 'Country',
			'kroki' => 'Кроки',
			'b_date' => 'Дат первого измерен',
			'e_date' => 'Дата последнего измерения',
                        'count'=>'кол измер',
			'id_user' => 'Id User',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('marker_site',$this->marker_site,true);
		$criteria->compare('marker_name',$this->marker_name,true);
		$criteria->compare('net_number',$this->net_number,true);
		$criteria->compare('point_marks',$this->point_marks,true);
		$criteria->compare('year_of_installation',$this->year_of_installation,true);
		$criteria->compare('year_of_destruction',$this->year_of_destruction,true);
		$criteria->compare('type_of_ground',$this->type_of_ground,true);
		$criteria->compare('type_of_foundation',$this->type_of_foundation,true);
		$criteria->compare('type_of_fastening',$this->type_of_fastening,true);
		$criteria->compare('conditions_of_survey',$this->conditions_of_survey,true);
		$criteria->compare('longitude_e',$this->longitude_e);
		$criteria->compare('latitude_n',$this->latitude_n);
		$criteria->compare('altitude_h',$this->altitude_h);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('kroki',$this->kroki,true);
		$criteria->compare('b_date',$this->b_date,true);
		$criteria->compare('e_date',$this->e_date,true);
                $criteria->compare('count',$this->count,true);
		$criteria->compare('id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>  array('pagesize'=>100)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Points the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
      
       /*  protected function afterSave()
            {
               // if(parent::afterSave())
               // {
                  //  if($this->isNewRecord)
                  //  {
                        $modeMN =  new PointsDate;
                      
                      $datetime = date('Y-m-d');
                       // $datetime = date('Y-m-d', strtotime($this->b_date));//strtotime($this->date_start);
                       // $this->e_date = date('Y-m-d', strtotime($this->e_date));//strtotime($this->date_start);
                        $modeMN->date_f = '1016-10-01';
                        $modeMN->save(false);
                        
                        parent::afterSave();
                       //  return true;
                    //    }
                  //      else return false;
                  //  }
                  
                 
              //  }
                
            }*/
}
