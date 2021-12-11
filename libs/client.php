<?php
global $conn;
function connect_db()
{
    global $conn;
     
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', '', 'diagnose_covid',3308) or die ('Can not connect to database');
        mysqli_set_charset($conn, 'utf8');
    }
}
function disconnect_db()
{
    global $conn;
     
    if ($conn){
        mysqli_close($conn);
    }
}


 

function get_all_clients()
{
    global $conn;
     
    connect_db();
     
    $sql = "select * from tb_client";
     
    $query = mysqli_query($conn, $sql);
     
    $result = array();
     
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    return $result;
}
 
function get_client($client_id)
{
    global $conn;
     
    connect_db();
     
    $sql = "select * from tb_client where client_id = {$client_id}";
     
    $query = mysqli_query($conn, $sql);
     
    $result = array();
     
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
     
    return $result;
}

// , $client_vaccine, $client_habitat, $client_sex,
// $client_weather, $client_test, $client_case, $client_fever,
// $client_cough, $client_tired, $client_stuffy, $client_chest_tightness,
// $client_other,$result
// function add_client( $client_name, 
// $client_age ,$client_vaccine,$client_habitat,$client_sex,$client_weather,$client_test,$client_case,$client_fever,$client_cough)
// {
//     // Gọi tới biến toàn cục $conn
//     global $conn;
     
//     // Hàm kết nối
//     connect_db();
     
    // Chống SQL Injection
    // $client_name       = addslashes($client_name);
    // $client_sex        = addslashes($client_sex);
    // $client_age   = addslashes($client_age);
    // $client_vaccine       = addslashes($client_vaccine);
    // $client_habitat        = addslashes($client_habitat);

    // $client_weather       = addslashes($client_weather);
    // $client_test        = addslashes($client_test);
    // $client_case   = addslashes($client_case);
    // $client_fever       = addslashes($client_fever);
    // $client_cough        = addslashes($client_cough);
    // $client_tired   = addslashes($client_tired);

    //  $client_stuffy       = addslashes($client_stuffy);
    // $client_chest_tightness        = addslashes($client_chest_tightness);
    // $client_other   = addslashes($client_other);
    // $result       = addslashes($result);
     
    // Câu truy vấn thêm
//     $sql = "
//             INSERT INTO tb_client(client_name, client_age,client_vaccine,client_habitat,client_sex,client_weather,client_test,client_case,client_fever,client_cough) VALUES
//             ('$client_name','$client_age','$client_vaccine','$client_habitat','$client_sex','$client_weather','$client_test','$client_case','$client_fever','$client_cough')
//     ";
     
//     // Thực hiện câu truy vấn
//     $query = mysqli_query($conn, $sql);
     
//     return $query;
// } 

function add_client( $client_name, 
$client_age, $client_vaccine, $client_habitat, $client_sex,
$client_weather, $client_test, $client_case, $client_fever,
$client_cough, $client_tired, $client_stuffy, $client_chest_tightness,
$client_other,$result)
{
    global $conn;
     
    connect_db();
     
    $client_name       = addslashes($client_name);
    $client_sex        = addslashes($client_sex);
    $client_age   = addslashes($client_age);
    $client_vaccine       = addslashes($client_vaccine);
    $client_habitat        = addslashes($client_habitat);

    $client_weather       = addslashes($client_weather);
    $client_test        = addslashes($client_test);
    $client_case   = addslashes($client_case);
    $client_fever       = addslashes($client_fever);
    $client_cough        = addslashes($client_cough);
    $client_tired   = addslashes($client_tired);

     $client_stuffy       = addslashes($client_stuffy);
    $client_chest_tightness        = addslashes($client_chest_tightness);
    $client_other   = addslashes($client_other);
    $result       = addslashes($result);
     
    $sql = "
            INSERT INTO tb_client(client_name, client_age, client_vaccine,client_habitat,client_sex,
            client_weather,client_test,client_case,client_fever,client_cough,client_tired,
            client_stuffy,client_chest_tightness,client_other,result) VALUES
            ('$client_name', 
            '$client_age', '$client_vaccine', '$client_habitat', '$client_sex',
           '$client_weather', '$client_test', '$client_case', '$client_fever',
            '$client_cough', '$client_tired', '$client_stuffy', '$client_chest_tightness',
            '$client_other','$result')
    ";
     
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
function edit_client($client_id,$client_name)
 {
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $client_name       = addslashes($client_name);
     
    // Câu truy sửa
    $sql = "
            UPDATE tb_client SET
            client_name = '$client_name'
            WHERE client_id = $client_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
 }
// function edit_client($client_id,$client_name, 
// $client_age, $client_vaccine, $client_habitat, $client_sex,
// $client_weather, $client_test, $client_case, $client_fever,
// $client_cough, $client_tired, $client_stuffy, $client_chest_tightness,
// $client_other,$result)
// {
//     global $conn;
     
//     connect_db();
     
//     $client_name       = addslashes($client_name);
//     $client_sex        = addslashes($client_sex);
//     $client_age   = addslashes($client_age);
//     $client_vaccine       = addslashes($client_vaccine);
//     $client_habitat        = addslashes($client_habitat);

//     $client_weather       = addslashes($client_weather);
//     $client_test        = addslashes($client_test);
//     $client_case   = addslashes($client_case);
//     $client_fever       = addslashes($client_fever);
//     $client_cough        = addslashes($client_cough);
//     $client_tired   = addslashes($client_tired);

//      $client_stuffy       = addslashes($client_stuffy);
//     $client_chest_tightness        = addslashes($client_chest_tightness);
//     $client_other   = addslashes($client_other);
//     $result       = addslashes($result);
    
//     $sql = "
//             UPDATE tb_client SET
//             client_name = '$client_name',
//             client_age = '$client_age',
//             client_vaccine = '$client_vaccine',
//             client_habitat = '$client_habitat',
//             client_sex = '$client_sex',
//             client_weather = '$client_weather',
//             client_test = '$client_test',
//             client_case = '$client_case',
//             client_fever = '$client_fever',
//             client_cough = '$client_cough',
//             client_tired = '$client_tired',
//             client_stuffy = '$client_stuffy',
//             client_chest_tightness = '$client_chest_tightness',
//             client_other='$client_other',
//             result = '$result'
//             WHERE client_id = $client_id

//     ";
     
//     $query = mysqli_query($conn, $sql);
     
//     return $query;
// }
 
 
function delete_client($client_id)
{
    global $conn;
     
    connect_db();
    $sql = "
            DELETE FROM tb_client
            WHERE client_id = $client_id
    ";
     
    $query = mysqli_query($conn, $sql);
     
    return $query;
}


?>