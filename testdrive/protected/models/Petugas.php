<?php

/**
 * This is the model class for table "public.petugas".
 *
 * The followings are the available columns in table 'public.petugas':
 * @property integer $id_petugas
 * @property string $nama_petugas
 * @property string $alamat_petugas
 * @property integer $no_hp
 * @property string $jam_jaga
 */
class Petugas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'public.petugas';
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
			array('nama_petugas, alamat_petugas', 'length', 'max'=>50),
			array('jam_jaga', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_petugas, nama_petugas, alamat_petugas, no_hp, jam_jaga', 'safe', 'on'=>'search'),
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
			'id_petugas' => 'Id Petugas',
			'nama_petugas' => 'Nama Petugas',
			'alamat_petugas' => 'Alamat Petugas',
			'no_hp' => 'No Hp',
			'jam_jaga' => 'Jam Jaga',
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

		$criteria->compare('id_petugas',$this->id_petugas);
		$criteria->compare('nama_petugas',$this->nama_petugas,true);
		$criteria->compare('alamat_petugas',$this->alamat_petugas,true);
		$criteria->compare('no_hp',$this->no_hp);
		$criteria->compare('jam_jaga',$this->jam_jaga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Petugas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
