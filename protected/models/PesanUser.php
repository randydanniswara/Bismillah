<?php

/**
 * This is the model class for table "Pesan_User".
 *
 * The followings are the available columns in table 'Pesan_User':
 * @property integer $id_pesan
 * @property integer $id_receive
 */
class PesanUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pesan_User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pesan, id_receive', 'required'),
			array('id_pesan, id_receive', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pesan, id_receive', 'safe', 'on'=>'search'),
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
			'id_pesan' => 'Id Pesan',
			'id_receive' => 'Id Receive',
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

		$criteria->compare('id_pesan',$this->id_pesan);
		$criteria->compare('id_receive',$this->id_receive);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PesanUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getRecipient($id){
		$x = PesanUser::model()->findAll("id_pesan=".$id);
		$list = array();
		foreach ($x as $k) {
			if (User::model()->find("id=".$k->id_receive)->profil){
				$p = User::model()->find("id=".$k->id_receive)->profil->getDetail();
				$tmp = "";
				foreach ($p as $ko => $vo) {
			 		if ($ko == "id") $po = $vo;  
			 		if ($ko =="nama_depan" || $ko == "nama_belakang")	
			 			$tmp= $tmp." ".$vo;
			 	}
			 	$list[$po] = $tmp;
			}
		}
		return $list;
	}

	public function getPesan($id_user){
		$x = PesanUser::model()->findAll("id_receive=".$id_user);
		$list = array();
		foreach ($x as $key) {
			$list[] = $key->id_pesan;
		}
		return $list;
	}
}
