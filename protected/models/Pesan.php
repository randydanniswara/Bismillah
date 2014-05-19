<?php

/**
 * This is the model class for table "Pesan".
 *
 * The followings are the available columns in table 'Pesan':
 * @property integer $id
 * @property string $pesan
 * @property string $waktu
 * @property integer $id_sent
 * @property string $judul
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class Pesan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pesan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pesan, waktu, id_sent, judul', 'required'),
			array('id_sent', 'numerical', 'integerOnly'=>true),
			array('waktu', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pesan, waktu, id_sent, judul', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'Pesan_User(id_pesan, id_receive)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pesan' => 'Pesan',
			'waktu' => 'Waktu',
			'id_sent' => 'Id Sent',
			'judul' => 'Judul',
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
		$criteria->compare('pesan',$this->pesan,true);
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('id_sent',$this->id_sent);
		$criteria->compare('judul',$this->judul,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pesan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
