<?php

/**
 * This is the model class for table "measure_fault".
 *
 * The followings are the available columns in table 'measure_fault':
 * @property integer $id
 * @property string $marker_site
 * @property string $date
 * @property string $tour
 * @property string $operator
 * @property string $reason
 * @property string $id_user
 */
class MeasureFault extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'measure_fault';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marker_site, date, tour, operator, reason, id_user', 'required'),
                        
			array('marker_site', 'length', 'max'=>50),
			array('tour', 'length', 'max'=>6),
			array('operator', 'length', 'max'=>4),
			array('id_user', 'length', 'max'=>30),
                       // array( 'count, date_e', 'safe' ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marker_site, date, date_e, count, tour, operator, reason, id_user', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
            return array(
              'tou_r'=>array(self::BELONGS_TO, 'Tours', 'tour'),
              'operato_r'=>array(self::BELONGS_TO, 'Operators', 'operator'),        
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
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
			'date' => 'Дата',
                       // 'date_e'=>'Дата конца изм', 
                       // 'count'=>'интервал дней',
			'tour' => 'Кампания',
			'operator' => 'Оператор',
			'reason' => 'Причина',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('marker_site',$this->marker_site,true);
		$criteria->compare('date',$this->date,true);
               // $criteria->compare('date_e',$this->date_e,true);
              //  $criteria->compare('count',$this->count,true);
		$criteria->compare('tour',$this->tour,true);
		$criteria->compare('operator',$this->operator,true);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                    'pagination'=>array(
                                  'pagesize'=>100,
                        )
		));
	}
           
        
                                        //    protected function beforeSave()
                                        //        {
                                        //            if(parent::beforeSave())
                                        //            {
                                                     //   if($this->isNewRecord)
                                                     //   {

                                        //                    if( $this->date){
                                        //                 $this->date = date('Y-m-d', strtotime($this->date));//strtotime($this->date_start);
                                        //                 $this->date_e = date('Y-m-d', strtotime($this->date_e));//strtotime($this->date_start);
                                        //                     return true;
                                        //                    }
                                        //                    else return false;
                                                      //  }


                                        //            }

                                        //       }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MeasureFault the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
