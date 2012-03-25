<div class="ofertas index">
        <h2><?php echo __('Se muestran las últimas 5 ofertas');?></h2>
        <table cellpadding="0" cellspacing="0">
     
       <?php
        foreach ($oferta as $oferta): ?>
        <tr>
                <td><?php echo h($oferta['Oferta']['id']); ?>&nbsp;</td>
                <td><?php echo h($oferta['Oferta']['titulo']); ?>&nbsp;</td>
                <td><?php echo h($oferta['Oferta']['activa']); ?>&nbsp;</td>
                <td><?php echo h($oferta['Oferta']['created']); ?>&nbsp;</td>
                <td><?php echo h($oferta['Oferta']['modified']); ?>&nbsp;</td>
                <td><?php echo h($oferta['Oferta']['vacantes']); ?>&nbsp;</td>
                <td><?php echo h($oferta['Oferta']['fecha_limite']); ?>&nbsp;</td>
                <td>
                </td>
        </tr>
<?php endforeach; ?>
       
	 </table>


º
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
          <li><?php echo $this->Html->link(__('New Oferta'), array('action' => 'add')); ?></li>
          <li><?php echo $this->Html->link(__('List Oferta'), array( 'action' => 'index')); ?> </li>	        
	<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>

        </ul>
</div>
             
