<?php
require './libs/clients.php';
    $id=isset($_GET['id']) ? $_GET['id']: '';
$data=get_client($id);
if(empty($data))
{
header("Location: client-list.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./designed/result.css  ">
</head>
<body>
    <h1 >kết qua chẩn đoán covid</h1>
<table border ='1'>
    <tr><th>Name</th>
<th>Result</th>
</tr>
<tr><td><?php echo $data['client_name'] ?></td>
<td><?php echo $data['result'] ?></td>
</tr>
</table>


    <button><a href="client-list.php">Return</a></button>
</body>
</html>