<?php

/**
 * This is the model class for table "Aset".
 *
 * The followings are the available columns in table 'Aset':
 * @property integer $id
 * @property string $nama
 * @property integer $jumlah
 * @property integer $tahun
 * @property integer $id_lab
 *
 * The followings are the available model relations:
 * @property Lab $idLab
 */
class Aset extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Aset';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, jumlah, tahun, id_lab', 'required'),
			array('id, jumlah, tahun, id_lab', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, jumlah, tahun, id_lab', 'safe', 'on'=>'search'),
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
			'idLab' => array(self::BELONGS_TO, 'Lab', 'id_lab'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'jumlah' => 'Jumlah',
			'tahun' => 'Tahun',
			'id_lab' => 'Id Lab',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('tahun',$this->tahun);
		$criteria->compare('id_lab',$this->id_lab);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aset the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getAllData(){
		$tmp = self::model()->findAll();
		$max = 0;
		$result = NULL;
		foreach ($tmp as $key) {
			$nama = Lab::model()->getNamaLab($key->id_lab);
			$result["$nama"] = isset($result["$nama"]) ? $result["$nama"]+$key->jumlah : $key->jumlah;
		}
		return $result;
	}

	public function getAllDataTahun($id_lab){
		$tmp = self::model()->findAll("id_lab=".$id_lab);
		$max = 0;
		$result = NULL;
		foreach ($tmp as $key) {
			$result[$key->tahun] = isset($result[$key->tahun]) ? $result[$key->tahun]+$key->jumlah : $key->jumlah;
		}
		return $result;
	}

}
