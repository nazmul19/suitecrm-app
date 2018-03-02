
<input type="text" name="{$fields.report_to_name.name}" class="sqsEnabled" tabindex="1" id="{$fields.report_to_name.name}" size="" value="{$fields.report_to_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.report_to_name.id_name}" 
	id="{$fields.report_to_name.id_name}" 
	value="{$fields.reports_to_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.report_to_name.name}" id="btn_{$fields.report_to_name.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_LABEL"}"
onclick='open_popup(
    "{$fields.report_to_name.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":{/literal}"{$fields.report_to_name.id_name}"{literal},"last_name":{/literal}"{$fields.report_to_name.name}"{literal}}}{/literal}, 
	"single", 
	true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.report_to_name.name}" id="btn_clr_{$fields.report_to_name.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.report_to_name.name}', '{$fields.report_to_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.report_to_name.name}']) != 'undefined'",
		enableQS
);
</script>