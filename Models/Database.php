<?php

    $host = '127.0.0.1';
    $dbname = "web technologies project test database";
    $dbuser = "root";
    $dbpass = "";


    function getConnection(){
        global $host;
        global $dbname;
        global $dbuser;
        global $dbpass;

        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $con;
    }

?>