<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $email
 * @property string $senha
 * @property string $nome
 * @property string $dtCriacao
 * @property string $dtAlteracao
 * @property string $dtUltLogin
 *
 * The followings are the available model relations:
 * @property Livro[] $livros
 */
class Usuario extends CActiveRecord
{
	
	private $_chaveEncrypt = 'asdf#$RT76@(*';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, senha, nome, dtCriacao', 'required'),
			array('email, nome', 'length', 'max'=>150),
			array('senha', 'length', 'max'=>45),
			array('dtAlteracao, dtUltLogin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, email, senha, nome, dtCriacao, dtAlteracao, dtUltLogin', 'safe', 'on'=>'search'),
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
			'livros' => array(self::HAS_MANY, 'Livro', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'email' => 'Email',
			'senha' => 'Senha',
			'nome' => 'Nome',
			'dtCriacao' => 'Dt Criacao',
			'dtAlteracao' => 'Dt Alteracao',
			'dtUltLogin' => 'Dt Ult Login',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('dtCriacao',$this->dtCriacao,true);
		$criteria->compare('dtAlteracao',$this->dtAlteracao,true);
		$criteria->compare('dtUltLogin',$this->dtUltLogin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function encrypt($value)
	{
		
		return md5($this->_chaveEncrypt.$value);
	}
}