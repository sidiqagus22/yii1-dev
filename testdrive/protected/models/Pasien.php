<?php

/**
 * This is the model class for table "public.pasien".
 *
 * The followings are the available columns in table 'public.pasien':
 * @property integer $id_pasien
 * @property string $kd_pasien
 * @property string $nama_pasien
 * @property integer $no_hp
 * @property string $alamat
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'public.pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_hp', 'numerical', 'integerOnly'=>true),
			array('kd_pasien, nama_pasien, alamat', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pasien, kd_pasien, nama_pasien, no_hp, alamat', 'safe', 'on'=>'search'),
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
			'id_pasien' => 'Id Pasien',
			'kd_pasien' => 'Kd Pasien',
			'nama_pasien' => 'Nama Pasien',
			'no_hp' => 'No Hp',
			'alamat' => 'Alamat',
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
		
		// $criteria->compare('kd_pasien',$this->kd_pasien,true);

		if (!empty($_GET['inputSearch'])) {
			$search = $_GET['inputSearch'];
			$criteria->condition = "kd_pasien='$search' OR nama_pasien='$search' OR alamat='$search'";
		} 

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
