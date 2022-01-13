<?php
require './libs/clients.php';
;
 
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_client($id);
}
 
header("location: client-list.php");

?>