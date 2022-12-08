<!--Bibliografia:
    https://www.youtube.com/watch?v=IlMoD2Flnho
    https://www.youtube.com/watch?v=cka0J41iJY0
    https://www.youtube.com/watch?v=9DW5jOLynec
-->

<?php
function conectar(){
    $host='localhost';
    $user='root';
    $pass='';
    $bd='db_practischool';
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}

?>