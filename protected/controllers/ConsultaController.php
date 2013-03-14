<?php

class ConsultaController extends Controller
{
	public $layout='//layouts/column2';
	
	
	public function filters()
	{
		return array(
			'accessControl'
		);
	}
	
	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions'=>array('index','livro'),
				'users'=>array('@')
			),
			array(
				'deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	public function actionIndex(){
		$this->render('index');
	}
	
	public function actionLivro(){
		
		$dataProvider = array();
		
		$model = new Livro;
		
		if(isset($_POST['Livro']))
		{
			$dataProvider=new CActiveDataProvider('Livro', array(
			    'criteria'=>array(
			    	'condition' => 'titulo like :titulo',
			    	'params'=>array(':titulo'=>$_POST['Livro']['titulo']."%"),
			        'with'=>array(
			        	'autors',
			        	'movimentacaos' => array(
							'order'=>'idMovimentacao DESC'
						)
					),
			    ),
			    'pagination'=>array(
			        'pageSize'=>5,
			    ),
			));
			
			$this->render('livros',array(
				'dataProvider'=>$dataProvider,
				'model'=> $model
			));
		}	
		else
		{
			$this->render('livros',array(
				'model'=> $model
			));
	
		}
	}
}