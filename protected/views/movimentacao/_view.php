<?php
/* @var $this MovimentacaoController */
/* @var $data Movimentacao */
?>

<div class="view">
		<b><?php echo CHtml::encode($data->getAttributeLabel('idMovimentacao')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->idMovimentacao), array('view', 'id'=>$data->idMovimentacao)); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('idLivro')); ?>:</b>
		<?php echo CHtml::encode($data->idLivro0->titulo); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('idPessoa')); ?>:</b>
		<?php echo CHtml::encode($data->idPessoa0->nome); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('dtEmprestimo')); ?>:</b>
		<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dtEmprestimo))); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('dtDevolucao')); ?>:</b>
			<?php if(null !== $data->dtDevolucao && '0000-00-00' != $data->dtDevolucao):?>
				<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dtDevolucao))); ?>
			<?php else:?>
				-
			<?php endif;?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('devolvido')); ?>:</b>
		
		<?php if($data->devolvido === 'N'): ?>
			<?php echo CHtml::link(CHtml::encode('Não'), array('movimentacao/devolver','id'=>$data->idMovimentacao));?>		
		<?php else:?>
			Sim <br>
			<?php if(null !== $data->observacao):?>
				<b><?php echo CHtml::encode($data->getAttributeLabel('observacao')); ?>:</b>
				<?php echo CHtml::encode($data->observacao); ?>
				<br />
			<?php endif;?>
		<?php endif;?>
</div>