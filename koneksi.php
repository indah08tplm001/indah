<?php
$conn = mysqli_connect("localhost","root","","db_coba");
if ($conn)
{
echo " sudah terhubung nich, maemunah";
}
else {
    echo"gak nyambung bambang";
}
?>