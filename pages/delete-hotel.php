<?php 
include_once '../includes/common.php';
include_once '../includes/functions.php';
$deleted = deleteHotel ($_GET['id']);
if ($deleted == false) {
	$_SESSION['deletedSuccessful'] = true;
}
header('Location: ../admin.php');
exit;
?>