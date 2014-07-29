
<?php
/**
 * TODO: Fix the $output to get the right content.
 */
if (!isset($output)) $output= array('object'=>'none');

?>

<textarea id="userData" class="hidden">
	<?php echo json_encode($output); ?>
</textarea>
