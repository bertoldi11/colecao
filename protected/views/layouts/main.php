<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	
	<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/base.css'); ?>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
</head>

<body>
<div class="">	
	<?php
		$this->widget('bootstrap.widgets.TbNavbar', array(
			'brand' => Yii::app()->name,
			'items' => array(
				array(
					'class' => 'bootstrap.widgets.TbMenu',
					'items' => array(
						array('label'=>'Início', 'url'=>array('/site/index')),
						array('label'=>'Autores', 'url'=>array('/autor/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Consultas', 'url'=>array('/consulta/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Editoras', 'url'=>array('/editora/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Livros', 'url'=>array('/livro/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Movimentação', 'url'=>array('/movimentacao/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Pessoas', 'url'=>array('/pessoa/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Usuários', 'url'=>array('/usuario/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)
				)
			)
		));?>
</div>
<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->
<footer class="footer">
    <div class="container">
        <p class="copy">Copyright &copy; 2013 by Vinícius Bertoldi <br />
        	All Rights Reserved.
        </p>
        <p class="powered">
            Powered by <a target="_blank" href="http://www.yiiframework.com">Yii PHP framework</a> Built with 
            <a target="_blank" href="http://www.jquery.com">jQuery</a> /
            <a target="_blank" href="http://www.yiiframework.com/extension/bootstrap">Yii-Bootstrap</a> /
            <a target="_blank" href="http://www.clevertech.biz">Yii-Booster</a>
    </div>
</footer><!-- footer -->

</body>
</html>
