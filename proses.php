<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$moto = $_POST['moto'];
$prodi = $_POST['prodi'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a");
fputs($fp, "$nama|$nim|$moto|$prodi\n");
fclose($fp);

header("Location: setelahProses.php");

?>



