<?php /* Smarty version 2.6.30, created on 2019-03-28 14:38:37
         compiled from loop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'loop.tpl', 32, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'foo')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php unset($this->_sections['user']);
$this->_sections['user']['name'] = 'user';
$this->_sections['user']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user']['show'] = true;
$this->_sections['user']['max'] = $this->_sections['user']['loop'];
$this->_sections['user']['step'] = 1;
$this->_sections['user']['start'] = $this->_sections['user']['step'] > 0 ? 0 : $this->_sections['user']['loop']-1;
if ($this->_sections['user']['show']) {
    $this->_sections['user']['total'] = $this->_sections['user']['loop'];
    if ($this->_sections['user']['total'] == 0)
        $this->_sections['user']['show'] = false;
} else
    $this->_sections['user']['total'] = 0;
if ($this->_sections['user']['show']):

            for ($this->_sections['user']['index'] = $this->_sections['user']['start'], $this->_sections['user']['iteration'] = 1;
                 $this->_sections['user']['iteration'] <= $this->_sections['user']['total'];
                 $this->_sections['user']['index'] += $this->_sections['user']['step'], $this->_sections['user']['iteration']++):
$this->_sections['user']['rownum'] = $this->_sections['user']['iteration'];
$this->_sections['user']['index_prev'] = $this->_sections['user']['index'] - $this->_sections['user']['step'];
$this->_sections['user']['index_next'] = $this->_sections['user']['index'] + $this->_sections['user']['step'];
$this->_sections['user']['first']      = ($this->_sections['user']['iteration'] == 1);
$this->_sections['user']['last']       = ($this->_sections['user']['iteration'] == $this->_sections['user']['total']);
?>
  ID: <?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['id']; ?>
<br />
  Name: <?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
<br />
  Email: <?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['email']; ?>
<br />
  <br />
<?php endfor; endif; ?>

<hr style="border: 1px solid;" />

<table>
	<tr>
      <th>ID</th>
      <th>Name</th> 
      <th>Email</th>
    </tr>
  <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>

    <tr>
      <th><?php echo $this->_tpl_vars['user']['id']; ?>
</th>
      <th><?php echo $this->_tpl_vars['user']['name']; ?>
</th> 
      <th><?php echo $this->_tpl_vars['user']['email']; ?>
</th>
    </tr>

   <?php endforeach; endif; unset($_from); ?>
</table>

<hr style="border: 1px solid;" />

<?php if (! ( $this->_tpl_vars['users'][0]['name'] == 'Dat' )): ?>
  <p><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][0]['name'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</p>
<?php endif; ?>
<!-- <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
  ID: <?php echo $this->_tpl_vars['user']['id']; ?>
<br />
  Name: <?php echo $this->_tpl_vars['user']['name']; ?>
<br />
  Email: <?php echo $this->_tpl_vars['user']['email']; ?>
<br />
  <?php $_from = $this->_tpl_vars['numbers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['number']):
?>
     Number: <?php echo $this->_tpl_vars['number']; ?>
<br />
  <?php endforeach; endif; unset($_from); ?>
  <br />
<?php endforeach; endif; unset($_from); ?> -->