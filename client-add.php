<?php
    require './libs/client.php';
 
    // Nếu người dùng submit form
    if (!empty($_POST['add_client']))
    {
        // Lay data
        $data['client_name']        = isset($_POST['client_name']) ? $_POST['client_name'] : '0';
        
        // xac suat
        $so1=0;
        $so2=0;
        $so3=0;
        $so4=0;
        $so5=0;
        $so6=0;
        $so7=0;
        $so8=0;
        // tiem vaccine
        $data['vaccine']=isset($_POST['vaccine'])?$_POST['vaccine'] :'0';
        $f2=$data['vaccine'];
        // giơi tính 
        $data['sex']         = isset($_POST['sex']) ? $_POST['sex'] : '0';
        // Ban thuoc dang nao
        $data['fmay']         = isset($_POST['fmay']) ? $_POST['fmay'] : '0';
        


        // xet nghiem chưa
        $data['test']         = isset($_POST['test']) ? $_POST['test'] : '0';

        // tuoi 
        $data['age']=isset($_POST['age'])?$_POST['age']:'0';
        // nhiet do trung binh
        $data['nhiet_do']         = isset($_POST['nhiet_do']) ? $_POST['nhiet_do'] : '0';
        // khu vực sống
        $data['noi_song']         = isset($_POST['noi_song']) ? $_POST['noi_song'] : '0';
        
        // các triệu chứng

        $data['tc1']         = isset($_POST['tc1']) ? $_POST['tc1'] : '0';
        $data['tc2']         = isset($_POST['tc2']) ? $_POST['tc2'] : '0';
        $data['tc3']         = isset($_POST['tc3']) ? $_POST['tc3'] : '0';
        $data['tc4']         = isset($_POST['tc4']) ? $_POST['tc4'] : '0';
        $data['tc5']         = isset($_POST['tc5']) ? $_POST['tc5'] : '0';
        $data['tc6']         = isset($_POST['tc6']) ? $_POST['tc6'] : '0';
        // Validate thong tin
        $errors = array();
        if ($data['client_name']=='0'){
            $errors['client_name'] = 'Chưa nhập tên sinh vien';
        }
         
        // Neu ko co loi thi insert

        $result="i do not";
        if (!$errors){
            add_client($data['client_name'], 
            $data['client_age'],$data['client_vaccine'],$data['client_habitat'],$data['client_sex'],
            $f5, $f6, $f8, $client_fever,
            $client_cough, $data['tc1'] ,$data['tc2'] ,$data['tc3'] ,$data['tc4'] ,$data['tc5'] ,$data['tc6'] ,$result);
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
    <form action="client-add.php" method="POST">

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

        <select name="vaccine" id="cars">
            <option value="v0">Not injected yet </option>
            <option  value="v1">Sinovac</option>
            <option value="v2">Astrazeneca</option>
            <option value="v3">Jansen</option>
            <option value="v4">Sinopharm</option>
            <option value="v5">Frizer Biontech</option>
            <option value="v6">Novavax</option>
            <option value="v7">Sputnik</option>
            <option value="v8">Moderna</option>
        </select>
        <br>
        <label for="cars">Giới tính của bạn ? </label>

        <select name="sex" id="cars">
            <option value="n1">Nam </option>
            <option value="n2"> Nữ </option>

        </select>

        <br>
        <label for="cars">Bạn thuộc dạng nào ? </label>

        <select name="fmay" id="cars">
            <option value="f0">Không thuộc các dạng f </option>
            <option value="f1">F1</option>
            <option value="f2">F2</option>
            <option value="f3">F3</option>
            <option value="f4">F4</option>
        </select>
        <br>
        <label for="cars">Bạn đã xét nghiệm chưa (nếu có thì hãy chọn cách xét nghiệm cho chúng tôi)? </label>

        <select name="test" id="cars">
            <option value="c0">Chưa xét nghiệm</option>
            <option value="c1">RT - PCR (phân tử) </option>
            <option value="c2">Test nhanh (Kháng nguyên )</option>
        </select>

        <br>
        <label for="cars">Tuổi của bạn nằm trong các dạng nào sau đây ? </label>

        <select name="age" id="cars">
            <option value="d1">0-19</option>
            <option value="d2">20-39 </option>
            <option value="d3">40-59</option>
            <option value="d4">60+</option>
        </select>

        <br>
        <label for="cars">Nhiệt độ trung bình nơi bạn sống trong 5 ngày gần nhất ? </label>

        <select name="nhiet_do" id="cars">
            <option value="t1">30 - 37</option>
            <option value="t2">23 - 29 </option>
            <option value="t3">17 - 22</option>
            <option value="t4">10 - 16</option>
        </select>

        <br>
        <label for="cars">Khu vực bạn sống thuộc vùng nào ? </label>

        <select name="noi_song" id="cars">
        <option value="kv0">chưa xác định </option>
        <option value="kv1">Vùng xanh - cận xanh</option>
            <option value="kv2">Vùng vàng </option>
            <option value="kv3">Vùng cam </option>
            <option value="kv4">Vùng đỏ </option>
        </select>

        <br>
        <label for="cars">Bạn hãy tích vào những triệu chứng bạn gặp phải trong vòng 14 ngày qua  ? </label>
        <br>
        <input type="checkbox" id="vehicle1" name="tc1" value="tc1">
        <label for="vehicle1"> Sốt </label><br>
        <input type="checkbox" id="vehicle2" name="tc2" value="tc2">
        <label for="vehicle2"> Ho</label><br>
        <input type="checkbox" id="vehicle3" name="tc3" value="tc3">
        <label for="vehicle3"> Mệt mỏi </label><br>
        <input type="checkbox" id="vehicle1" name="tc4" value="tc4">
        <label for="vehicle1"> Khó thở </label><br>
        <input type="checkbox" id="vehicle2" name="tc5" value="tc5">
        <label for="vehicle2"> Đau tức ngực </label><br>
        <input type="checkbox" id="vehicle3" name="tc6" value="tc6">
        <label for="vehicle3"> các triêu chứng khác (đau nhức , đau họng ,tiêu chảy , viêm kết mạc ,đau đầu ,mất vị giác hoặc khứu giác ,da nổi mẩn
            hay ngón tay ngón chân bị tấy đỏ hoặc tím tái)
            <input type="submit" name="add_client" value="Lưu"/>
    </form>




</body>

</html>