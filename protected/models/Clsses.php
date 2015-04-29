<?php

/**
 * This is the model class for table "clsses".
 *
 * The followings are the available columns in table 'clsses':
 * @property integer $idclsses
 * @property integer $studentID
 * @property integer $teacherID
 * @property string $ClassName
 *
 * The followings are the available model relations:
 * @property Students $student
 */
class Clsses extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clsses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassName', 'required'),
			array('studentID, teacherID', 'numerical', 'integerOnly'=>true),
			array('ClassName', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idclsses, studentID, teacherID, ClassName', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Students', 'studentID'),
			'clsses' => array(self::BELONGS_TO, 'teachers', 'teacherID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idclsses' => 'Idclsses',
			'studentID' => 'Student',
			'teacherID' => 'Teacher',
			'ClassName' => 'Class Name',
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

		$criteria->compare('idclsses',$this->idclsses);
		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('teacherID',$this->teacherID);
		$criteria->compare('ClassName',$this->ClassName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clsses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
