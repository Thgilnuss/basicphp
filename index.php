<?php
// 1. Mảng liên tục (Indexed Array)
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo $color . " ";
}
echo "<br>";

// 2. Mảng kết hợp (Associative Array)
$person = array("name" => "John", "age" => 30, "city" => "New York");
foreach ($person as $key => $value) {
    echo $key . ": " . $value . " ";
}
echo "<br>";

// 3. Mảng đa chiều (Multidimensional Array)
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
echo "<br>";

// Hàm tách Họ, Tên lót và Tên
function tachHoTen($hoTen) {
    $mangTu = explode(" ", $hoTen);
    $soTu = count($mangTu);

    $ho = $mangTu[0];
    $tenLot = "";
    $ten = "";

    if ($soTu >= 3) {
        for ($i = 1; $i < $soTu - 1; $i++) {
            $tenLot .= $mangTu[$i] . " ";
        }
    }

    $ten = end($mangTu);

    echo "Họ: " . $ho . "<br>";
    echo "Tên lót: " . trim($tenLot) . "<br>";
    echo "Tên: " . $ten . "<br>";
}

// Sử dụng hàm với chuỗi đầu vào
$tachTen1 = "Nguyen Van Minh Hai";
tachHoTen($tachTen1);

echo "<br>";

$tachTen2 = "Nguyen Phan Van Minh Hai";
tachHoTen($tachTen2);

// 1. Xử lý Chuỗi
$chuoi = "Hello World!";
echo strtoupper($chuoi) . "<br>"; // In hoa: HELLO WORLD!
echo strtolower($chuoi) . "<br>"; // In thường: hello world!
echo strlen($chuoi) . "<br>"; // Độ dài chuỗi: 12
echo str_replace("World", "PHP", $chuoi) . "<br>"; // Thay thế: Hello PHP!

// 2. Hàm Thời Gian và Ngày Tháng
echo date("Y-m-d H:i:s") . "<br>"; // Ngày giờ hiện tại

$ngaySinh = strtotime("1990-05-15");
$soGiayTu1970 = time() - $ngaySinh;
echo floor($soGiayTu1970 / (365 * 24 * 60 * 60)) . " tuổi<br>"; // Tuổi

// 3. Cấu trúc điều khiển
$so = 15;
if ($so % 2 == 0) {
    echo "Số chẵn<br>";
} else {
    echo "Số lẻ<br>";
}

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

$counter = 0;
while ($counter < 3) {
    echo "Lặp lần thứ " . ($counter + 1) . "<br>";
    $counter++;
}

// 4. Hàm Mảng
$fruits = array("Apple", "Banana", "Orange");
print_r($fruits);

if (in_array("Banana", $fruits)) {
    echo "<br>Có Banana trong mảng<br>";
}

sort($fruits);
print_r($fruits);
echo "<br>";

// 5. Kết nối Cơ Sở Dữ Liệu
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thực hiện các truy vấn SQL

$conn->close();

// 6. Hàm và Phương Thức
function tinhTong($a, $b) {
    return $a + $b;
}

$ketQua = tinhTong(5, 3);
echo "Tổng là: " . $ketQua . "<br>";

class HinhChuNhat {
    public $chieuDai;
    public $chieuRong;

    public function tinhDienTich() {
        return $this->chieuDai * $this->chieuRong;
    }
}

$hcn = new HinhChuNhat();
$hcn->chieuDai = 4;
$hcn->chieuRong = 3;
echo "Diện tích hình chữ nhật là: " . $hcn->tinhDienTich();
?>