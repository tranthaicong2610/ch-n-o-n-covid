<?php
    require './libs/clients.php';
 
    // Nếu người dùng submit form
    if (!empty($_POST['add_client']))
    {
        // Lay data
        $data['client_name']        = isset($_POST['client_name']) ? $_POST['client_name'] : '';
        //tiem vaccine
        $data['v0']         = isset($_POST['v0']) ? $_POST['v0'] : 0;
        $data['v1']         = isset($_POST['v1']) ? $_POST['v1'] : 0;
        $data['v2']         = isset($_POST['v2']) ? $_POST['v2'] : 0;
        $data['v3']         = isset($_POST['v3']) ? $_POST['v3'] : 0;
        $data['v4']         = isset($_POST['v4']) ? $_POST['v4'] : 0;
        $data['v5']         = isset($_POST['v5']) ? $_POST['v5'] : 0;
        $data['v6']         = isset($_POST['6']) ? $_POST['v6'] : 0;
        $data['v7']         = isset($_POST['v7']) ? $_POST['v7'] : 0;
        $data['v8']         = isset($_POST['v8']) ? $_POST['v8'] : 0;
        // giơi tính 
        $data['n2']         = isset($_POST['n2']) ? $_POST['n2'] : 0;
        $data['n1']         = isset($_POST['n1']) ? $_POST['n1'] : 0;
        //Ban thuoc dang nao
        $data['f0']         = isset($_POST['f0']) ? $_POST['f0'] : 0;
        $data['f1']         = isset($_POST['f1']) ? $_POST['f1'] : 0;
        $data['f2']         = isset($_POST['f2']) ? $_POST['f2'] : 0;
        $data['f3']         = isset($_POST['f3']) ? $_POST['f3'] : 0;
        $data['f4']         = isset($_POST['f4']) ? $_POST['f4'] : 0;
        // xet nghiem chưa
        $data['c0']         = isset($_POST['c0']) ? $_POST['c0'] : 0;
        $data['c1']         = isset($_POST['c1']) ? $_POST['c1'] : 0;
        $data['c2']         = isset($_POST['c2']) ? $_POST['v2'] : 0;
        // tuoi 
        $data['d1']         = isset($_POST['d1']) ? $_POST['d1'] : 0;
        $data['d2']         = isset($_POST['d2']) ? $_POST['d2'] : 0;
        $data['d3']         = isset($_POST['d3']) ? $_POST['d3'] : 0;
        $data['d4']         = isset($_POST['d4']) ? $_POST['d4'] : 0;

        // nhiet do trung binh
        $data['t1']         = isset($_POST['t1']) ? $_POST['t1'] : 0;
        $data['t2']         = isset($_POST['t2']) ? $_POST['t2'] : 0;
        $data['t3']         = isset($_POST['t3']) ? $_POST['t3'] : 0;
        $data['t4']         = isset($_POST['t4']) ? $_POST['t4'] : 0;

        // khu vực sống
        $data['kv0']         = isset($_POST['kv0']) ? $_POST['kv0'] : 0;
        $data['kv1']         = isset($_POST['kv1']) ? $_POST['kv1'] : 0;
        $data['kv2']         = isset($_POST['kv2']) ? $_POST['kv2'] : 0;
        $data['kv3']         = isset($_POST['kv3']) ? $_POST['kv3'] : 0;
        $data['kv4']         = isset($_POST['kv4']) ? $_POST['kv4'] : 0;
        // các triệu chứng
        $data['tc1']         = isset($_POST['tc1']) ? $_POST['tc1'] : 0;
        $data['tc2']         = isset($_POST['tc2']) ? $_POST['tc2'] : 0;
        $data['tc3']         = isset($_POST['tc3']) ? $_POST['tc3'] : 0;
        $data['tc4']         = isset($_POST['tc4']) ? $_POST['tc4'] : 0;
        $data['tc5']         = isset($_POST['tc5']) ? $_POST['tc5'] : 0;
        $data['tc6']         = isset($_POST['tc6']) ? $_POST['tc6'] : 0;
        // Validate thong tin
        $errors = array();
        if (empty($data['sv_name'])){
            $errors['sv_name'] = 'Chưa nhập tên sinh vien';
        }
         
        if (empty($data['sv_v'])){
            $errors['sv_v'] = 'Chưa nhập giới tính sinh vien';
        }
         
        // Neu ko co loi thi insert
        if (!$errors){
            add_client($data['sv_name'], $data['sv_v'], $data['sv_birthday']);
            // Trở về trang danh sách
            header("location: client-list.php");
        }
    }
     
    disconnect_db();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css_design.css">
</head>

<body>
    <form action="client-list.php" method="POST">

        <div class="box-title-new">
            <div class="box-title-name-new">
                <span class="null">chẩn đoán covid
            </div>
        </div>
        <div>
            <label for="" >Nhập tên </label> <input type="text" name="client_name">

        </div><br>
        <br>
        <label for="cars">Bạn đã tiêm vaccine gì ? </label>

        <select name="cars" id="cars">
            <option value="volvo" name="v0">Not injected yet </option>
            <option value="volvo" name="v1">Sinovac</option>
            <option value="saab"name="v2">Astrazeneca</option>
            <option value="mercedes"name="v3">Jansen</option>
            <option value="audi"name="v4">Sinopharm</option>
            <option value="volvo"name="v5">Frizer Biontech</option>
            <option value="saab"name="v6">Novavax</option>
            <option value="mercedes"name="v7">Sputnik</option>
            <option value="audi"name="v8">Moderna</option>
        </select>
        <br>
        <label for="cars">Giới tính của bạn ? </label>

        <select name="cars" id="cars">
            <option value="volvo" name="n1">Nam </option>
            <option value="volvo" name="n2"> Nữ </option>

        </select>

        <br>
        <label for="cars">Bạn thuộc dạng nào ? </label>

        <select name="cars" id="cars">
            <option value="volvo"name="f0">Không thuộc các dạng f </option>
            <option value="volvo" name="f1">F1</option>
            <option value="saab" name="f2">F2</option>
            <option value="mercedes" name="f3">F3</option>
            <option value="audi" name="f4">F4</option>
        </select>
        <br>
        <label for="cars">Bạn đã xét nghiệm chưa (nếu có thì hãy chọn cách xét nghiệm cho chúng tôi)? </label>

        <select name="cars" id="cars">
            <option value="volvo" name="c0">Chưa xét nghiệm</option>
            <option value="volvo" name="c1">RT - PCR (phân tử) </option>
            <option value="saab" name="c2">Test nhanh (Kháng nguyên )</option>
        </select>

        <br>
        <label for="cars">Tuổi của bạn nằm trong các dạng nào sau đây ? </label>

        <select name="cars" id="cars">
            <option value="volvo" name="d1">0-19</option>
            <option value="volvo" name="d2">20-39 </option>
            <option value="saab" name="d3">40-59</option>
            <option value="saab" name="d4">60+</option>
        </select>

        <br>
        <label for="cars">Nhiệt độ trung bình nơi bạn sống trong 5 ngày gần nhất ? </label>

        <select name="cars" id="cars">
            <option value="volvo" name="t1">30 - 37</option>
            <option value="volvo" name="t2">23 - 29 </option>
            <option value="saab" name="t3">17 - 22</option>
            <option value="saab" name="t4">10 - 16</option>
        </select>

        <br>
        <label for="cars">Khu vực bạn sống thuộc vùng nào ? </label>

        <select name="cars" id="cars">
        <option value="volvo" name="kv0">chưa xác định </option>
        <option value="volvo" name="kv1">Vùng xanh - cận xanh</option>
            <option value="volvo" name="kv2">Vùng vàng </option>
            <option value="saab" name="kv3">Vùng cam </option>
            <option value="saab" name="kv4">Vùng đỏ </option>
        </select>

        <br>
        <label for="cars">Bạn hãy tích vào những triệu chứng bạn gặp phải trong vòng 14 ngày qua  ? </label>
        <br>
        <input type="checkbox" id="vehicle1" name="tc1" value="Bike">
        <label for="vehicle1"> Sốt </label><br>
        <input type="checkbox" id="vehicle2" name="tc2" value="Car">
        <label for="vehicle2"> Ho</label><br>
        <input type="checkbox" id="vehicle3" name="tc3" value="Boat">
        <label for="vehicle3"> Mệt mỏi </label><br>
        <input type="checkbox" id="vehicle1" name="tc4" value="Bike">
        <label for="vehicle1"> Khó thở </label><br>
        <input type="checkbox" id="vehicle2" name="tc5" value="Car">
        <label for="vehicle2"> Đau tức ngực </label><br>
        <input type="checkbox" id="vehicle3" name="tc6" value="Boat">
        <label for="vehicle3"> các triêu chứng khác (đau nhức , đau họng ,tiêu chảy , viêm kết mạc ,đau đầu ,mất vị giác hoặc khứu giác ,da nổi mẩn
            hay ngón tay ngón chân bị tấy đỏ hoặc tím tái)
            <input type="submit" name="add_client" value="Lưu"/>
    </form>




</body>

</html>