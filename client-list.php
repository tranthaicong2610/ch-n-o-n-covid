<?php
require './libs/client.php';
$clients = get_all_clients();
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách khách hàng </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Danh sách khách hàng </h1>
        <a href="client-add.php">Thêm khách hàng </a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Result</td>
                <td>Options</td>
            </tr>
            <?php foreach ($clients as $item){ ?>
            <tr>
                <td><?php echo $item['client_id']; ?></td>
                <td><?php echo $item['client_name']; ?></td>
                <td>
                    <form method="post" action="client-delete.php">
                        <input onclick="window.location = 'client-edit.php?id=<?php echo $item['client_id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['client_id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
                <td><a href="./client_result.php">chẩn đoán </a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>