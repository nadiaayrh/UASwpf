<?php

include "../../classes/deleteantri.php";
$no_antrian = $_GET['no_antrian'];

$query = mysqli_query($conn, "DELETE FROM tbl_antrian WHERE no_antrian='$no_antrian'");
$data  = mysqli_fetch_array($query);

if ($data)
{
echo "<script>alert('Antrian di perbaharui!'); window.location = 'antriancek.php'</script>";
}

else
{
    echo"<script>alert(' menghapus data !'); window.location = 'antriancek.php'</script>";
}

?>
