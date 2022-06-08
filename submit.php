<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $database = "travel";

        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection Failed");
        }

        $nama = $_REQUEST['nama_lengkap'];
        $nik = $_REQUEST['nik'];
        $nomor_hp = $_REQUEST["nomor_hp"];
        $tempat_wisata = $_REQUEST["tempat_wisata"];
        $tanggal = $_REQUEST["tanggal_kunjungan"];
        $jml_dewasa = $_REQUEST["jml_dewasa"];
        $jml_anak = $_REQUEST['jml_anak'];

        $sql = "INSERT INTO user VALUES ('$nama','$nik','$nomor_hp','$tempat_wisata','$tanggal','$jml_dewasa','$jml_anak')";

        if(mysqli_query($conn, $sql)) {
            
            header("Location: mainpage.php");
            die();
        } else {
            mysqli_error($conn);
        }

    ?>
</body>
</html>