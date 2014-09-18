<h2>
	<?php echo h($visitor['Visitor']['firstname']); ?>
	<?php echo h($visitor['Visitor']['surname']); ?>
</h2>
<dl>
<dt><?php echo __('Table'); ?></dt>
<dd>
	<?php echo __($visitor['Visitor']['table']); ?>
</dd>
<dt><?php echo __('Remarks'); ?></dt>
<dd>
	<?php echo __($visitor['Visitor']['remarks']); ?>
</dd>





<dt><?php echo __('Created'); ?></dt>
<dd><?php echo $this->Time->nice($visitor['Visitor']
['created']); ?></dd>
<dt><?php echo __('Modified'); ?></dt>
<dd><?php echo $this->Time->nice($visitor['Visitor']
['modified']); ?></dd>
</dl>