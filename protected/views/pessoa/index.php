<?php
	$this->breadcrumbs=array(
		'Pessoas',
	);
	
	// Tabs de navegacao
	$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'pills', // 'tabs' or 'pills'
		'tabs'=>array(
			array('label'=>'Listar','content'=> $this->renderPartial('admin', array('dataProvider'=>$dataProvider), true), 'active'=>true,),
			array('label'=>'Criar', 'content'=> $this->renderPartial('_form', array('model'=>$model), true)),
		),
	));

?>
