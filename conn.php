<?php

$connect = new mysqli("database_mysql","root","efel123","si_kompos");

if($connect){
}else{
    echo "Connection Failed";
    exit();
}
