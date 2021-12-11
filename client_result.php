<?php
require './libs/client.php';
$id=isset($_GET['id']) ?$_GET['id'] :'';
if($id=='') header("Location: client-list.php");
$client = get_client($id);

disconnect_db();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>chẩn đoán covid</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">chẩn đoán </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $client['client_name'] ?></td>
                <td><?php echo $client['result'] ?></td>
            </tr>
            
        </tbody>
    </table>
</body>

</html>