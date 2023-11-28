<?php
    $server = "localhost";
    $userid = "root";
    $pwd = "";
    $dbname = "test";
            $conn = mysqli_connect($server, $userid,$pwd,$dbname);
        if(!$conn)
        {
            die("please check your connection" .mysql_connect_error());
        }
?>