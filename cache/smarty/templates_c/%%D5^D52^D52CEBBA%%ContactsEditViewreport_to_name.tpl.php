<?php /* Smarty version 2.6.29, created on 2018-03-01 06:35:03
         compiled from cache/include/InlineEditing/ContactsEditViewreport_to_name.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/include/InlineEditing/ContactsEditViewreport_to_name.tpl', 7, false),array('function', 'sugar_getimagepath', 'cache/include/InlineEditing/ContactsEditViewreport_to_name.tpl', 18, false),)), $this); ?>

<input type="text" name="<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
" class="sqsEnabled" tabindex="1" id="<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['report_to_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['report_to_name']['id_name']; ?>
" 
	id="<?php echo $this->_tpl_vars['fields']['report_to_name']['id_name']; ?>
" 
	value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL'), $this);?>
"
onclick='open_popup(
    "<?php echo $this->_tpl_vars['fields']['report_to_name']['module']; ?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":'; ?>
"<?php echo $this->_tpl_vars['fields']['report_to_name']['id_name']; ?>
"<?php echo ',"last_name":'; ?>
"<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
"<?php echo '}}'; ?>
, 
	"single", 
	true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['report_to_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['report_to_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>