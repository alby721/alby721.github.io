<?php
include($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include($root_path . '/notes/login/session.php');

$current_note_id=$_POST['current_note_id'];
$sql = "UPDATE notes SET 
trash = '0',
updated_at = CURRENT_TIMESTAMP()
WHERE id = " .  $current_note_id;

if (mysqli_query($conn, $sql)) {

}

?>