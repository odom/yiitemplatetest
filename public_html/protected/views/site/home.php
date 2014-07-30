
<?php
/**
 * TODO: Fix the $output to get the right content.
 */
if (!isset($output)) $output= array('object'=>'none');

?>
<textarea id="userTest" class="hidden">
	<?php echo json_encode($output); ?>
</textarea>


<textarea id="userData" class="hidden">
	<?php echo json_encode($output); ?>
</textarea>
