<?php

/**
 * This is the model class for table "agencies".
 *
 * The followings are the available columns in table 'agencies':
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $description
 * @property string $id_user
 */
class Agencies extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agencies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, name, description, id_user', 'required'),
			array('title', 'length', 'max'=>10),
			array('name', 'length', 'max'=>50),
			array('id_user', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, name, description, id_user', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'name' => 'Name',
			'description' => 'Description',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                    'pagination'=>array(
                                  'pagesize'=>100,
                        )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agencies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function all(){
            $models = self::model()->findAll();
            return CHtml::listData($models,'id','title');
             
            
        }
}
