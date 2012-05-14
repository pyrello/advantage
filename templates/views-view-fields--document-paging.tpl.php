<?php 
$pathparts = explode('/', $fields['path']->content);
$selected = FALSE;
$arg0 = arg(0);
$arg1 = arg(1);
if (arg(0) == $pathparts[1] && arg(1) == $pathparts[2]) {
	$selected = TRUE;
}
?>

<option id="<?php print $fields['field_document_pagenum']->content; ?>" value="<?php print $fields['path']->content; ?>"<?php if ($selected) print " selected='selected'"; ?>><?php print $fields['field_document_pagenum']->content; ?></option>