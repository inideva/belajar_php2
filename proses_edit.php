<?php
include "koneksi.php";

$nama= $_POST["nama"];
$jns_klmn= $_POST["jns"];
$no_tlp= $_POST["telp"];
$alamat= $_POST["alamat"];

$result = mysqli_query($conn, "UPDATE `pelanggan` set `id` = '$id', `nama`= '$nama', `jenis_kelamin`='$jns_klmn', `telpon`='$no_tlp', `alamat`='$alamat' where `id`='$id'");

header("Location:index.php");
?>