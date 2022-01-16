<?php
/*
|--------------------------------------------------------------------------
| Aksi login
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|
*/

session_start();
extract($_POST);
include 'konfig.php';
$result = $koneksi->query("select * from tbl_user where username = '$username' and password = '$password'");
$akuncocok = $result->num_rows;
if ($akuncocok==1) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['hak_akses'] = $row['hak_akses'];
        $_SESSION['grup'] = $row['grup'];

        if ($row['hak_akses'] == "Dokter") {
            header("location:dokter.php");
        } elseif ($row['hak_akses'] == "Admin") {
            header("location:admin.php");
        } elseif ($row['hak_akses'] == "Front Office") {
            header("location:front-office.php");
        } elseif ($row['hak_akses'] == "Departemen") {
            header("location:departemen.php");
        } else {
            echo '<script>href.location</script>';
            session_destroy();
        }
    }
}else{
    echo "<script>
	location.href='index.php?error=salah';
	</script>";
}
?>
