<?php /* Smarty version 2.6.30, created on 2019-03-28 14:39:29
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'header.tpl', 1, false),array('modifier', 'capitalize', 'header.tpl', 4, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "test.conf"), $this);?>

<HTML>
<HEAD>
<TITLE><?php echo ((is_array($_tmp=$this->_config[0]['vars']['pageTitle'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</TITLE>
<link rel="stylesheet" type="text/css" href="/public_html/css/style.css">
</HEAD>