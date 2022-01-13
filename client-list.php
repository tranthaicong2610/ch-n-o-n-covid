<?php
require './libs/clients.php';
$clients=array();
if(!empty($_GET['search_name'])&&$_GET['search-box']!='')
{
    $name=$_GET['search-box'];
    $clients =get_all_name($name);
}
else {
    $clients = get_all_clients();
}
disconnect_db();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Danh sách khách hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./designed/list2.css">
    
</head>

<body>
    <h1>Danh sách Khách hàng từng chẩn đoán </h1>
    <button class='add'><a href="client-add.php">Thêm thông tin khách hàng cần mới </a></button> <br /> <br />
    <form action="client-list.php" method="get">
        <div class="search">
            <input type="search" name="search-box" style="padding:5px; background-color: rgb(29, 29, 31) ;color:white;font-size:20px;" placeholder="nhập tên cần tìm"/>
    
           <input type="submit" name="search_name" style="padding:5px;background-color: rgb(14, 47, 192) ;color:white;font-size:20px;">
        </div>
    </form>
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Options</td>
            <td>Result Diagnose</td>
        </tr>
        <?php foreach ($clients as $item) { ?>
            <tr>
                <td><?php echo $item['client_id']; ?></td>
                <td><?php echo $item['client_name']; ?></td>
                <td class="edit-delete">
                    <form method="post" action="client-delete.php">
                        <input class="test te1" onclick="window.location = 'client-edit.php?id=<?php echo $item['client_id']; ?>'" type="button" value="Cập Nhật Thông Tin" />
                        <input type="hidden" name="id" value="<?php echo $item['client_id']; ?>" />
                        <input class="test te2" onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa Khách Hàng " />
                    </form>
                </td>
                <td><button><a href="client-result.php?id=<?php echo $item['client_id'] ?>">kết quả chẩn đoán covid</a></button> </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>