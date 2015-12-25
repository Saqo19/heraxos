<?php

/**
 * This is the model class for table "reg".
 *
 * The followings are the available columns in table 'reg':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $full_name
 * @property string $number
 * @property string $email
 * @property string $location
 */
class Users extends CActiveRecord
{
    public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
            return array(            
                    array('username, password, full_name, email', 'required'),
                    array('number', 'numerical', 'integerOnly'=>true),
                    array('email','email'),
                    array('username, password, full_name, email, location', 'length', 'max'=>255),
                    array('username , email', 'unique'),
                    array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
                    array('id, username, password, full_name, number, email, location', 'safe', 'on'=>'search'),
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
			'username' => 'Գախտնի Անուն',
			'password' => 'Գախտնաբառ',
			'full_name' => 'Անուն Ազգանուն',
			'location' => 'Տարածաշրջան',
			'number' => 'Հեռախոս',
                        'email' => 'Էլեկտրոնային հասցե'
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('number',$this->number,true);
                $criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reg the static model class
	 */
     
     
    
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
