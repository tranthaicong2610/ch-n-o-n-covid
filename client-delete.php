<?php
require './libs/clients.php';
;
 
// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_client($id);
}
 
// Trở về trang danh sách
header("location: client-list.php");

?>