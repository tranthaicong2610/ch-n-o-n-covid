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
    <form action="client-list.php">

        <div class="box-title-new">
            <div class="box-title-name-new">
                <span class="null">chẩn đoán covid
            </div>
        </div>
        <div>
            <label for="">Nhập tên </label> <input type="text">


        </div><br>
        <br>
        <label for="cars">Bạn đã tiêm vaccine gì ? </label>

        <select name="cars" id="cars">
            <option value="volvo">Not injected yet </option>
            <option value="volvo">Sinovac</option>
            <option value="saab">astrazeneca</option>
            <option value="mercedes">jansen</option>
            <option value="audi">sinopharm</option>
            <option value="volvo">frizer biontech</option>
            <option value="saab">novavax</option>
            <option value="mercedes">sputnik</option>
            <option value="audi">Moderna</option>
        </select>
        <br>
        <label for="cars">Giới tính của bạn ? </label>

        <select name="cars" id="cars">
            <option value="volvo">Nam </option>
            <option value="volvo"> Nữ </option>

        </select>

        <br>
        <label for="cars">Bạn thuộc dạng nào ? </label>

        <select name="cars" id="cars">
            <option value="volvo">Không thuộc các dạng f </option>
            <option value="volvo">F1</option>
            <option value="saab">F2</option>
            <option value="mercedes">F3</option>
            <option value="audi">F4</option>
        </select>
        <br>
        <label for="cars">Bạn đã xét nghiệm chưa (nếu có thì hãy chọn cách xét nghiệm cho chúng tôi)? </label>

        <select name="cars" id="cars">
            <option value="volvo">Chưa xét nghiệm</option>
            <option value="volvo">RT - PCR (phân tử) </option>
            <option value="saab">Test nhanh (Kháng nguyên )</option>
        </select>

        <br>
        <label for="cars">Tuổi của bạn nằm trong các dạng nào sau đây ? </label>

        <select name="cars" id="cars">
            <option value="volvo">0-19</option>
            <option value="volvo">20-39 </option>
            <option value="saab">40-59</option>
            <option value="saab">60+</option>
        </select>

        <br>
        <label for="cars">Nhiệt độ trung bình nơi bạn sống trong 5 ngày gần nhất ? </label>

        <select name="cars" id="cars">
            <option value="volvo">30 - 37</option>
            <option value="volvo">23 - 29 </option>
            <option value="saab">17 - 22</option>
            <option value="saab">10 - 16</option>
        </select>

        <br>
        <label for="cars">Khu vực bạn sống thuộc vùng nào ? </label>

        <select name="cars" id="cars">
            <option value="volvo">Vùng xanh - cận xanh</option>
            <option value="volvo">Vùng vàng </option>
            <option value="saab">Vùng cam </option>
            <option value="saab">Vùng đỏ </option>
        </select>

        <br>
        <label for="cars">Bạn hãy tích vào những triệu chứng bạn gặp phải ? </label>
        <br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> Sốt </label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> Ho</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> Mệt mỏi </label><br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> Khó thở </label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> Đau tức ngực </label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> các triêu chứng khác (đau nhức , đau họng ,tiêu chảy , viêm kết mạc ,đau đầu ,mất vị giác hoặc khứu giác ,da nổi mẩn
            hay ngón tay ngón chân bị tấy đỏ hoặc tím tái)
    </form>




</body>

</html>