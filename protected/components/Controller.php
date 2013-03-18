<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	function inverteData($date, $mostrarHora =  FALSE)
	{
		/**
		 * TODO: Validar se vai mostrar a hora ou não
		 * TODO: Se for pra mostrar a hora, e não tiver a hora, pegar hora do sistema
		 */
		if(strpos($date,"-")!==false){
			$date = str_replace("-","/",$date);
		}
		
		$dados = explode(" ", $date);
		$data = explode("/",$dados[0]);
	        if(count($dados) == 1)
	            return $data[2]."/".$data[1]."/".$data[0];
	        else
	            return $data[2]."/".$data[1]."/".$data[0]." - ".$dados[1];
	}
}